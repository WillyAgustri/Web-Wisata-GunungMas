<?php

namespace App\Http\Controllers;

use App\Models\galeri;
use App\Models\wisata;
use Illuminate\Http\Request;

class ClientDetailGaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($Id_wisata)
    {
        $get_title_data = wisata::find($Id_wisata);

        $get_foto_data = Galeri::where('Id_wisata', $Id_wisata)
        ->select('Foto')
        ->get();

        return view('detail-galeri', compact('get_foto_data', 'get_title_data'));
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
    public function show(galeri $galeri)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(galeri $galeri)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, galeri $galeri)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(galeri $galeri)
    {
    }
}