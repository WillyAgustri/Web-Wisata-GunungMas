<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreadminRequest;
use App\Http\Requests\UpdateadminRequest;
use App\Models\admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $admin_data = admin::paginate(5);

        return view('dashboard.kelola_admin.kelola-admin', compact('admin_data'));
    }

    public function edit_index($id_admin)
    {
        $get_admin_data = admin::find($id_admin);

        return view('dashboard.kelola_admin.edit-admin', compact('get_admin_data'));
    }

    public function store(StoreadminRequest $request)
    {
        $admin_data = $request->validate([
            'username' => 'required',
            'password' => 'required']);
        $admin_data['password'] = bcrypt($admin_data['password']);
        admin::create($admin_data);

        return redirect()->route('dashboard.admin.index');
    }

    public function update(UpdateadminRequest $request)
    {
        // Validasi input
        $request->validate([
               'username' => 'required',
               'Oldpassword' => 'required',
               'Newpassword' => 'required',
               'password_confirmation' => 'required_with:Newpassword',
            ]);
        $get_auth = Auth::user();
        $admin_data = admin::find($get_auth->id_admin);
        if (!Hash::check($request->Oldpassword, $admin_data->password)) {
        } else {
            $admin_data->username = $request->input('username');
            $admin_data->password = bcrypt($request->input('Newpassword'));
            $admin_data->save();

            return redirect()->route('dashboard.admin.index');
        }

        return redirect()->back();
    }

    public function destroy($id_admin)
    {
        admin::find($id_admin);
        admin::destroy($id_admin);

        return redirect()->back();
    }
}