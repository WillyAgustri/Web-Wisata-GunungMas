@extends('admin-layout.app-admin')

@section('admin-content')
    <div class="container-fluid costum-container">
        <div class="container mt-5">
            <div class="card p-3">

                <form action="{{ route('dashboard.hotel.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <div class="text-center">
                            <strong>Hotel</strong>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Hotel</label>
                            <input type="text" class="form-control form-control-sm mb-3" name="Nama_hotel">
                        </div>
                        <div class="form-group">
                            <label for="">Longitude</label>
                            <input type="text" class="form-control form-control-sm mb-3" name="Longitude">
                        </div>
                        <div class="form-group">
                            <label for="">Latitude</label>
                            <input type="text" class="form-control form-control-sm mb-3" name="Latitude">
                        </div>

                        <div class="text-center">
                            <strong>Gambar</strong>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Upload Gambar Baru</label>
                            <input type="file" class="form-control form-control-md" name="gambar" id=""
                                placeholder="" aria-describedby="fileHelpId">
                            <div id="fileHelpId" class="form-text">Format : jpg/jpeg/png</div>
                        </div>
                        <button class="btn btn-md btn-primary mt-4 text-white">Tambah Hotel</button>
                        <a class="btn btn-md btn-secondary mt-4 text-white"
                            href="{{ route('dashboard.hotel.index') }}">Kembali</a>
                    </div>

            </div>

            </form>


        </div>
    </div>
    </div>
@endsection
