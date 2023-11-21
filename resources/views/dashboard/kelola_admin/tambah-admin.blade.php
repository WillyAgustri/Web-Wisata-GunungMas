@extends('admin-layout.app-admin')

@section('admin-content')
    <div class="container-fluid costum-container">
        <div class="container mt-5">
            <div class="card p-3">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <div class="text-center">
                            <strong>Tambah User</strong>
                        </div>
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control form-control-sm mb-3" value="" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" class="form-control form-control-sm mb-3" value=""name="email">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control form-control-sm mb-3" value="" name="password">
                        </div>
                    </div>
                    <button class="btn btn-md btn-primary mt-4 text-white">Tambah User</button>
                    <a class="btn btn-md btn-secondary mt-4 text-white" href="{{ route('kelola-admin') }}">Kembali</a>
            </div>
            </form>
        </div>
    </div>
    </div>
@endsection
