<?php

namespace App\Http\Controllers;

use App\Models\Tentang;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function edit_index($Id_tentang)
    {
        $tentang_data = Tentang::find($Id_tentang);

        return view('dashboard.kelola_tentang.edit-tentang', compact('tentang_data'));
    }

    public function index()
    {
        $tentang_data = Tentang::paginate(5);

        return view('dashboard.kelola_tentang.kelola-tentang', compact('tentang_data'));
    }

    public function store(Request $request)
    {
        $tentang_data = $request->validate([
            'Des_Tentang' => 'required',
        ]);

        if ($tentang_data) {
            Tentang::create($tentang_data);

            return redirect()->route('dashboard.tentang.index');
        }
    }

    public function update(Request $request, $Id_tentang)
    {
        $tentang_data = $request->validate([
            'Des_Tentang' => 'required',
        ]);

        $get_tentang_data = Tentang::find($Id_tentang);

        if ($get_tentang_data) {
            $get_tentang_data->update($tentang_data);

            return redirect()->route('dashboard.tentang.index');
        }

        return redirect()->back();
    }

    public function destroy($Id_Tentang)
    {
        Tentang::find($Id_Tentang);
        Tentang::destroy($Id_Tentang);

        return redirect()->back();
    }
}