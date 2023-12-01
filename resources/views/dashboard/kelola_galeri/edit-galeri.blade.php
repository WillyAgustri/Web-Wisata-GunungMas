@extends('admin-layout.app-admin')

@section('admin-content')
    <div class="container-fluid costum-container">
        <div class="container mt-5">
            <div class="card p-3">

                <form action="{{ route('dashboard.galeri.update', ['galeri' => $galeri_data->Id_galeri]) }}" method="POST"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-body">
                        <div class="text-center mb-3">
                            <strong>Edit Galeri</strong>
                        </div>
                        <div class="form-group">
                            <label for="idwisata">ID Wisata:</label>
                            <div>
                                <select id="idwisata" class="p-2" style="width: 100px" name="Id_wisata">
                                    @foreach ($galeri_id_wisata as $item)
                                        <option value="{{ $item->Id_wisata }}">{{ $item->Id_wisata }} -
                                            {{ $item->Nama_wisata }}</option>
                                    @endforeach

                                </select>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="">Nama Galeri</label>
                            <input type="text" class="form-control form-control-sm mb-3"
                                value="{{ $galeri_data->Nama_galeri }}" name="Nama_galeri">
                        </div>

                        <div class="form-group">
                            <label for="" class="form-label">Gambar Preview</label>
                            <input type="text" value="{{ $galeri_data->Foto }}" hidden>
                            <div> <img src="{{ asset('images/' . $galeri_data->Foto) }}" style="height: 300px;width:400px;">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Upload Gambar Baru</label>
                            <input type="file" class="form-control form-control-md" name="Foto"
                                value="{{ $galeri_data->Foto }}" id="" placeholder=""
                                aria-describedby="fileHelpId">
                            <div id="fileHelpId" class="form-text">Format : jpg/jpeg/png</div>
                        </div>

                        <button class="btn btn-md btn-primary mt-4 text-white">Edit Galeri</button>
                        <a class="btn btn-md btn-secondary mt-4 text-white"
                            href="{{ route('dashboard.galeri.index') }}">Back</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
