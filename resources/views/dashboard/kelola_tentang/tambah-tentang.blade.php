@extends('admin-layout.app-admin')

@section('admin-content')
    <div class="container-fluid costum-container">
        <div class="container mt-5">
            <div class="card p-3">
                <form action="{{ route('dashboard.tentang.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <div class="text-center">
                            <strong>Tambah Tentang</strong>
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi</label>
                            <textarea type="text" class="form-control form-control-sm mb-3" rows="10" value="" name="Des_Tentang"></textarea>
                        </div>

                    </div>
                    <button class="btn btn-md btn-primary mt-4 text-white">Tambah Paragraf</button>
                    <a class="btn btn-md btn-secondary mt-4 text-white"
                        href="{{ route('dashboard.tentang.index') }}">Kembali</a>
            </div>
            </form>
        </div>
    </div>
    </div>
@endsection
