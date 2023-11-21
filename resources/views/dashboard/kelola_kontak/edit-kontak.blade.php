@extends('admin-layout.app-admin')

@section('admin-content')
    <div class="container-fluid costum-container">
        <div class="container mt-5">
            <div class="card p-3">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <div class="text-center">
                            <strong>Edit Kontak</strong>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control form-control-sm mb-3" rows="10" value=""
                                name="nama"></input>
                        </div>
                        <div class="form-group">
                            <label for="">Telepon</label>
                            <input type="text" class="form-control form-control-sm mb-3" rows="10" value=""
                                name="nama"></input>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" class="form-control form-control-sm mb-3" rows="10" value=""
                                name="nama"></input>
                        </div>
                        <div class="form-group">
                            <label for="">Jam Buka</label>
                            <input type="text" class="form-control form-control-sm mb-3" rows="10" value=""
                                name="nama"></input>
                        </div>

                    </div>
                    <button class="btn btn-md btn-primary mt-4 text-white">Edit Kontak</button>
                    <a class="btn btn-md btn-secondary mt-4 text-white" href="{{ route('kelola-kontak') }}">Kembali</a>
            </div>
            </form>
        </div>
    </div>
    </div>
@endsection
