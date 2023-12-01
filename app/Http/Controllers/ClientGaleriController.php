<?php

namespace App\Http\Controllers;

use App\Models\wisata;

class ClientGaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $get_galeri_data = Wisata::join('tb_galeri', 'tb_wisata.Id_wisata', '=', 'tb_galeri.Id_wisata')
        ->select('tb_wisata.*', 'tb_galeri.Foto')
        ->groupBy('tb_wisata.Nama_wisata')
        ->get();

        return view('galeri', compact('get_galeri_data'));
    }
}
