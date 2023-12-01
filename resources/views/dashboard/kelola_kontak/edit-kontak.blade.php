@extends('admin-layout.app-admin')

@section('admin-content')
    <div class="container-fluid costum-container">
        <div class="container mt-5">
            <div class="card p-3">
                <form action="{{ route('dashboard.kontak.update', ['kontak' => $kontak_data->Id_kontak]) }}" method="POST"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-body">
                        <div class="text-center">
                            <strong>Edit Kontak</strong>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Kontak</label>
                            <input type="text" class="form-control form-control-sm mb-3"
                                value="{{ $kontak_data->Nama_Kontak }}" name="Nama_Kontak"></input>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control form-control-sm mb-3"
                                value="{{ $kontak_data->Email }}" name="Email"></input>
                        </div>
                        <div class="form-group">
                            <label for="">NO Telepon</label>
                            <input type="text" class="form-control form-control-sm mb-3"
                                value="{{ $kontak_data->No_telp }}" name="No_telp"></input>
                        </div>
                        <div class="form-group">
                            <label for="">Keterangan</label>
                            <textarea type="text" class="form-control form-control-sm mb-3" rows="5" name="Ket">{{ $kontak_data->Ket }}</textarea>
                        </div>
                    </div>
                    <button class="btn btn-md btn-primary mt-4 text-white">Edit Kontak</button>
                    <a class="btn btn-md btn-secondary mt-4 text-white"
                        href="{{ route('dashboard.kontak.index') }}">Kembali</a>
            </div>
            </form>
        </div>
    </div>
    </div>
@endsection
