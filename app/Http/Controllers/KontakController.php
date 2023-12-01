<?php

namespace App\Http\Controllers;

use App\Models\kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function edit_index($Id_kontak)
    {
        $kontak_data = kontak::find($Id_kontak);

        return view('dashboard.kelola_kontak.edit-kontak', compact('kontak_data'));
    }

    public function index()
    {
        $kontak_data = kontak::paginate('1');

        return view('dashboard.kelola_kontak.kelola-kontak', compact('kontak_data'));
    }

    public function update(Request $request, $Id_kontak)
    {
        $kontak_data = $request->validate([
            'Nama_Kontak' => 'required',
            'Email' => 'required',
            'No_telp' => 'required',
            'Ket' => 'required',
        ]);

        $get_kontak_data = kontak::find($Id_kontak);

        if ($get_kontak_data) {
            $get_kontak_data->update($kontak_data);

            return redirect()->route('dashboard.kontak.index');
        }

        return redirect()->back();
    }
}