@extends('admin-layout.app-admin')

@section('admin-content')
    <div class="container-fluid costum-container">
        <div class="container mt-5">
            <div class="card p-3">
                <form action="{{ route('dashboard.pesan.update', ['pesan' => $pesan_data->Id_pesan]) }}" method="POST"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-body">
                        <div class="text-center">
                            <strong>Edit Pesan</strong>
                        </div>
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control form-control-sm mb-3" value="{{ $pesan_data->Nama }}"
                                name="Nama"></input>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control form-control-sm mb-3" value="{{ $pesan_data->Email }}"
                                name="Email"></input>
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi</label>
                            <textarea type="text" class="form-control form-control-sm mb-3" rows="10" value="" name="Ket">{{ $pesan_data->Ket }}</textarea>
                        </div>

                    </div>
                    <button class="btn btn-md btn-primary mt-4 text-white">Edit Pesan</button>
                    <a class="btn btn-md btn-secondary mt-4 text-white"
                        href="{{ route('dashboard.pesan.index') }}">Kembali</a>
            </div>
            </form>
        </div>
    </div>
    </div>
@endsection
