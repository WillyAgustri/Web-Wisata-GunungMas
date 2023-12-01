<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login.login-admin');
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
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $admin = Auth::user();

            return redirect()->route('home-dashboard')->with([
                alert()->Success('Selamat Datang', $admin->username),
            ]);
        } else {
            return redirect()->route('login.index')->with([
                alert()->Error('Email atau Password Salah!', 'Silahkan Masukan Kembali...')]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(admin $admin)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(admin $admin)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, admin $admin)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(admin $admin, Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login.index')->with(alert()->Success('Anda Berhasil Logout'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login.index')->with([
            alert()->info('Anda Berhasil Logout', 'Dadah..')]);
    }
}