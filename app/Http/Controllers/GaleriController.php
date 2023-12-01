<?php

namespace App\Http\Controllers;

use App\Models\galeri;
use App\Models\wisata;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function tambah_index()
    {
        $galeri_id_wisata = wisata::get();

        return view('dashboard.kelola_galeri.tambah-galeri', compact('galeri_id_wisata'));
    }

    public function edit_index($Id_galeri)
    {
        $galeri_data = galeri::find($Id_galeri);
        $galeri_id_wisata = wisata::get();

        return view('dashboard.kelola_galeri.edit-galeri', compact('galeri_data', 'galeri_id_wisata'));
    }

    public function index()
    {
        $galeri_data = galeri::paginate(5);

        return view('dashboard.kelola_galeri.kelola-galeri', compact('galeri_data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $galeri_data = $request->validate([
            'Id_wisata' => 'required',
            'Nama_galeri' => 'required',
        ]);

        if ($request->hasFile('Foto')) {
            $imageName = time().'.'.$request->file('Foto')->extension();
            $request->file('Foto')->move(public_path('images'), $imageName);
            $galeri_data['Foto'] = $imageName;
        } else {
            $galeri_data['Foto'] = 'Tidak ada Foto';
        }

        if ($galeri_data) {
            galeri::create($galeri_data);

            return redirect()->route('dashboard.galeri.index');
        }

        return redirect()->back();
    }

    public function update(Request $request, $Id_galeri)
    {
        $galeri_data = $request->validate([
            'Id_wisata' => 'required',
            'Nama_galeri' => 'required',
        ]);

        $get_galeri_data = galeri::find($Id_galeri);

        if ($request->Foto) {
            $imageName = time().'.'.$request->file('Foto')->extension();
            $request->file('Foto')->move(public_path('images'), $imageName);
            $galeri_data['Foto'] = $imageName;
        } else {
            $galeri_data['Foto'] = $get_galeri_data['Foto'];
        }

        if ($get_galeri_data) {
            $get_galeri_data->update($galeri_data);

            return redirect()->route('dashboard.galeri.index');
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($Id_galeri)
    {
        galeri::find($Id_galeri);
        galeri::destroy($Id_galeri);

        return redirect()->back();
    }
}
