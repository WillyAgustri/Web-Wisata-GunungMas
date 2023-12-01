<?php

namespace App\Http\Controllers;

use App\Models\Tentang;

class ClientTentangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $get_tentang_data = Tentang::get();

        return view('tentang', compact('get_tentang_data'));
    }
}
