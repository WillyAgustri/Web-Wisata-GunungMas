<?php

namespace App\Http\Controllers;

use App\Models\pesan;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function edit_index($Id_pesan)
    {
        $pesan_data = pesan::find($Id_pesan);

        return view('dashboard.pesan.edit-pesan', compact('pesan_data'));
    }

    public function index()
    {
        $pesan_data = pesan::paginate('7');

        return view('dashboard.pesan.kelola-pesan', compact('pesan_data'));
    }

    public function store(Request $request)
    {
        $pesan_data = $request->validate([
            'Name' => 'required',
            'Email' => 'required',
            'Ket' => 'required',
            ]);

        if ($pesan_data) {
            pesan::create($pesan_data);

            return redirect()->route('dashboard.pesan.index');
        }
    }

    public function update(Request $request, $Id_pesan)
    {
        $pesan_data = $request->validate([
            'Nama' => 'required',
            'Email' => 'required',
            'Ket' => 'required',
        ]);

        $get_pesan_data = pesan::find($Id_pesan);

        if ($get_pesan_data) {
            $get_pesan_data->update($pesan_data);

            return redirect()->route('dashboard.pesan.index');
        }
    }

    public function destroy($Id_pesan)
    {
        pesan::find($Id_pesan);
        pesan::destroy($Id_pesan);

        return redirect()->route('dashboard.pesan.index');
    }
}