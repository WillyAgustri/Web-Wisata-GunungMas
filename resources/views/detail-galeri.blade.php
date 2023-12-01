@extends('layout.app')

@section('content')
    <div class="hero page-inner overlay"
        style="background-image: url('https://i.ibb.co/LpVNqZG/air-terjun-bawin-kameloh.jpg')">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">Detail Galeri</h1>

                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">
                                Galeri
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <h2 class="font-weight-bold text-primary  text-center py-4 ml-2">
        Detail Galeri {{ $get_title_data->Nama_wisata }}
    </h2>

    <div class="container d-flex justify-content-center ">

        @foreach ($get_foto_data as $item)
            <div class="image-list__item m-3">
                <img src="{{ asset('images/' . $item->Foto) }}" />
            </div>
        @endforeach
        <div class="clearfix"></div>
    </div>

    <style>
        .image-lists .image-list__item {
            width: 20%;

            margin: 90px;
        }

        .image-list__item img {
            width: 400px;
            /* Atur lebar gambar sesuai kebutuhan Anda */
            height: 400px;
            /* Atur tinggi gambar sesuai kebutuhan Anda */
        }



        @media (max-width: 769px) {
            .image-lists .image-list__item {
                width: 50%;
            }
        }

        @media (max-width: 480px) {
            .image-lists .image-list__item {
                width: 100%;
            }
        }
    </style>
@endsection
