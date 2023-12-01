<?php

namespace App\Http\Controllers;

use App\Models\kontak;
use App\Models\pesan;
use Illuminate\Http\Request;

class ClientKontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $get_kontak_data = Kontak::first();

        return view('contact', compact('get_kontak_data'));
    }

    public function store(Request $request)
    {
        $kontak_data = $request->validate([
            'Nama' => 'required',
            'Email' => 'required',
            'Ket' => 'required',
        ]);

        if ($kontak_data) {
            pesan::create($kontak_data);

            return redirect()->back()->with([
                alert()->success('Berhasil Terkirim!'),
            ]);
        }
    }
}
