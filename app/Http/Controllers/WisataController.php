<?php

namespace App\Http\Controllers;

use App\Models\wisata;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    public function edit_index($Id_wisata)
    {
        $wisata_data = wisata::find($Id_wisata);

        return view('dashboard.kelola_wisata.edit-wisata', compact('wisata_data'));
    }

    public function index()
    {
        $wisata_data = wisata::paginate(3);

        return view('dashboard.kelola_wisata.kelola-wisata', compact('wisata_data'));
    }

    public function store(Request $request)
    {
        $wisata_data = $request->validate([
            'Nama_wisata' => 'required',
            'Des_wisata' => 'required',
        ]);

        if ($wisata_data) {
            wisata::create($wisata_data);

            return redirect()->route('dashboard.wisata.index');
        } else {
            return redirect()->back();
        }
    }

    public function update(Request $request, $Id_wisata)
    {
        $validate_wisata = $request->validate([
            'Nama_wisata' => 'required',
            'Des_wisata' => 'required',
        ]);

        $wisata_data = wisata::find($Id_wisata);

        if ($wisata_data) {
            $wisata_data->update($validate_wisata);

            return redirect()->route('dashboard.wisata.index');
        } else {
            return redirect()->back();
        }
    }

    public function destroy($Id_wisata)
    {
        wisata::find($Id_wisata);
        wisata::destroy($Id_wisata);

        return redirect()->back();
    }
}