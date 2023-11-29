@extends('admin-layout.app-admin')

@section('admin-content')
    <div class="container-fluid costum-container">
        <div class="container mt-5">
            <div class="card p-3">
                <form action="{{ route('dashboard.admin.update', ['admin' => $get_admin_data->id_admin]) }}" method="POST"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-body">
                        <div class="text-center">
                            <strong>Edit Admin</strong>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control form-control-sm mb-3"
                                value="{{ $get_admin_data->username }}" name="username">
                        </div>
                        <div class="form-group">
                            <label for="Oldpassowrd">Password Lama</label>
                            <input type="text" class="form-control form-control-sm mb-3" name="Oldpassword"
                                placeholder="Password Lama">
                        </div>
                        <div class="form-group">
                            <label for="Newpassword">Password Baru</label>
                            <input type="password" class="form-control form-control-sm mb-3" name="Newpassword"
                                placeholder="Password Baru">
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                            <input type="password" class="form-control form-control-sm mb-3" name="password_confirmation"
                                id="password_confirmation" placeholder="Konfirmasi Password">
                        </div>
                    </div>
                    <button class="btn btn-md btn-primary mt-4 text-white">Edit Admin</button>
                    <a class="btn btn-md btn-secondary mt-4 text-white"
                        href="{{ route('dashboard.admin.index') }}">Kembali</a>
            </div>
            </form>
        </div>
    </div>
    </div>
@endsection
