@extends('admin-layout.app-admin')

@section('admin-content')
    <div class="container-fluid costum-container">
        <div class="container mt-5">
            <div class="card p-3">
                <form action="{{ route('dashboard.admin.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <div class="text-center">
                            <strong>Tambah Admin</strong>
                        </div>
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" class="form-control form-control-sm mb-3" name="username"
                                placeholder="ex:Willy">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control form-control-sm mb-3" name="password"
                                placeholder="Password">
                        </div>
                    </div>
                    <button class="btn btn-md btn-primary mt-4 text-white">Tambah Admin</button>
                    <a class="btn btn-md btn-secondary mt-4 text-white"
                        href="{{ route('dashboard.admin.index') }}">Kembali</a>
            </div>
            </form>
        </div>
    </div>
    @include('sweetalert::alert')
    </div>
@endsection
