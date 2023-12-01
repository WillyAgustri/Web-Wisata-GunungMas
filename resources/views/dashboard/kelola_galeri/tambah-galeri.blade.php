@extends('admin-layout.app-admin')

@section('admin-content')
    <div class="container-fluid costum-container">
        <div class="container mt-5">
            <div class="card p-3">

                <form action="{{ route('dashboard.galeri.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <div class="text-center">
                            <strong>Tambah Galeri</strong>
                        </div>
                        <div class="form-group">
                            <label for="">ID Wisata</label>
                            <div>
                                <select class="p-2" style="width: 100px"id="idwisata" name="Id_wisata">
                                    @foreach ($galeri_id_wisata as $item)
                                        <option value="{{ $item->Id_wisata }}">
                                            {{ $item->Id_wisata }} - {{ $item->Nama_wisata }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="">Nama Galeri</label>
                            <input type="text" class="form-control form-control-sm mb-3" placeholder="Nama Galeri"
                                name="Nama_galeri">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Choose file</label>
                            <input type="file" class="form-control form-control-md" name="Foto" value=""
                                id="" placeholder="" aria-describedby="fileHelpId">
                            <div id="fileHelpId" class="form-text">Format : jpg/jpeg/png</div>
                        </div>

                        <button class="btn btn-md btn-primary mt-4 text-white">Tambah Galeri</button>
                        <a class="btn btn-md btn-secondary mt-4 text-white"
                            href="{{ route('dashboard.galeri.index') }}">Back</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
