<?php

namespace App\Http\Controllers;

use App\Models\galeri;
use App\Models\wisata;
use Illuminate\Http\Request;

class ClientHomeController extends Controller
{
    public function index()
    {
        $get_wisata_data = Wisata::join('tb_galeri', 'tb_wisata.Id_wisata', '=', 'tb_galeri.Id_wisata')
        ->select('tb_wisata.*', 'tb_galeri.Foto')
        ->groupBy('tb_wisata.Nama_wisata')
        ->get();

        $get_galeri_data = Galeri::take(6)->get();

        $total_wisata_data = Wisata::count();
        $total_galeri_data = Galeri::count();

        return view(
            'home',
            compact(
                'get_wisata_data',
                'get_galeri_data',
                'total_wisata_data',
                'total_galeri_data'
            )
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(wisata $wisata)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(wisata $wisata)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, wisata $wisata)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(wisata $wisata)
    {
    }
}