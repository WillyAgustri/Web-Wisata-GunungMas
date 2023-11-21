@extends('admin-layout.app-admin')

@section('admin-content')
    <div class="container-fluid costum-container">
        <div class="container mt-5">
            <div class="card p-3">

                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <div class="text-center">
                            <strong>Edit Galeri</strong>
                        </div>
                        <div class="form-group">
                            <label for="">ID Wisata</label>
                            <input type="text" class="form-control form-control-sm mb-3" value="" name="title">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Choose file</label>
                            <input type="file" class="form-control form-control-md" name="picture" value=""
                                id="" placeholder="" aria-describedby="fileHelpId">
                            <div id="fileHelpId" class="form-text">Format : jpg/jpeg/png</div>
                        </div>

                        <button class="btn btn-md btn-primary mt-4 text-white">Edit Galeri</button>
                        <a class="btn btn-md btn-secondary mt-4 text-white" href="{{ route('kelola-galeri') }}">Back</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
