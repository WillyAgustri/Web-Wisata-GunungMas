@extends('admin-layout.app-admin')

@section('admin-content')
    <div class="container-fluid costum-container">
        <div class="container mt-5">
            <div class="card p-3">

                <form action="{{ route('dashboard.hotel.update', ['hotel' => $hotel_data->Id_hotel]) }}" method="POST"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-body">
                        <div class="text-center">
                            <strong>Hotel</strong>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Hotel</label>
                            <input type="text" class="form-control form-control-sm mb-3"
                                value="{{ $hotel_data->Nama_hotel }}" name="Nama_hotel">
                        </div>
                        <div class="form-group">
                            <label for="">Longitude</label>
                            <input type="text" class="form-control form-control-sm mb-3"
                                value="{{ $hotel_data->Longitude }}" name="Longitude">
                        </div>
                        <div class="form-group">
                            <label for="">Latitude</label>
                            <input type="text" class="form-control form-control-sm mb-3"
                                value="{{ $hotel_data->Latitude }}" name="Latitude">
                        </div>

                        <div class="form-group">
                            <label for="" class="form-label">Gambar Preview</label>
                            <input type="text" value="{{ $hotel_data->gambar }}" hidden>
                            <div> <img src="{{ asset('images/' . $hotel_data->gambar) }}"
                                    style="height: 300px;width:400px;">
                            </div>
                        </div>


                        <div class="mb-3">
                            <label for="" class="form-label">Upload Gambar Baru</label>
                            <input type="file" class="form-control form-control-md" name="gambar" value=""
                                id="" placeholder="" aria-describedby="fileHelpId">
                            <div id="fileHelpId" class="form-text">Format : jpg/jpeg/png</div>
                        </div>
                        <button class="btn btn-md btn-primary mt-4 text-white">Edit Hotel</button>
                        <a class="btn btn-md btn-secondary mt-4 text-white"
                            href="{{ route('dashboard.hotel.index') }}">Kembali</a>
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>
@endsection
