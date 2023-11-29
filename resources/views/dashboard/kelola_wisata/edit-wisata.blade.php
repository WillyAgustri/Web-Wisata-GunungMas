@extends('admin-layout.app-admin')

@section('admin-content')
    <div class="container-fluid costum-container">
        <div class="container mt-5">
            <div class="card">
                <div class="row">
                    <div class="col m-4">
                        <form action="{{ route('dashboard.wisata.update', ['wisatum' => $wisata_data->Id_wisata]) }}"
                            method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-body">
                                <div class="text-center">
                                    <strong>Edit Wisata</strong>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Wisata</label>
                                    <input type="text" class="form-control form-control-sm mb-3"
                                        value="{{ $wisata_data->Nama_wisata }}" name="Nama_wisata">
                                </div>
                                <div class="form-group">
                                    <label for="">Longitude</label>
                                    <input type="text" class="form-control form-control-sm mb-3"
                                        value="{{ $wisata_data->Longitude }}"name="Longitude">
                                </div>
                                <div class="form-group">
                                    <label for="">Latitude</label>
                                    <input type="text" class="form-control form-control-sm mb-3"
                                        value="{{ $wisata_data->Latitude }}" name="Latitude">
                                </div>

                                <div class="form-group">


                                </div>
                                <button class="btn btn-md btn-primary mt-4 text-white">Edit Wisata</button>
                                <a class="btn btn-md btn-secondary mt-4 text-white"
                                    href="{{ route('dashboard.wisata.index') }}">Back</a>
                            </div>
                    </div>
                    <div class="col m-4">
                        <div class="form-group mt-3">
                            <label for="">Deskripsi</label>
                            <textarea type="text" class="form-control form-control-sm mb-3 " rows="8" name="Des_wisata">{{ $wisata_data->Des_wisata }}</textarea>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
