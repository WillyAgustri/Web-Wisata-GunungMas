@extends('admin-layout.app-admin')

@section('admin-content')
    <div class="container-fluid costum-container">
        <div class="container mt-5">
            <div class="card p-3">
                <form action="{{ route('dashboard.tentang.update', ['tentang' => $tentang_data->Id_tentang]) }}"
                    method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-body">
                        <div class="text-center">
                            <strong>Edit Tentang</strong>
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi</label>
                            <textarea type="text" class="form-control form-control-sm mb-3" rows="10" name="Des_Tentang">{{ $tentang_data->Des_Tentang }}</textarea>
                        </div>

                    </div>
                    <button class="btn btn-md btn-primary mt-4 text-white">Edit Paragraf</button>
                    <a class="btn btn-md btn-secondary mt-4 text-white"
                        href="{{ route('dashboard.tentang.index') }}">Kembali</a>
            </div>
            </form>
        </div>
    </div>
    </div>
@endsection
