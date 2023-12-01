@extends('layout.app')


@section('content')

    <head>
        <title>
            Galeri
        </title>
    </head>

    <body>



        <div class="hero page-inner overlay" style="background-image: url('https://i.ibb.co/BCB2bSc/Batu-suli.jpg')">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-9 text-center mt-5">
                        <h1 class="heading" data-aos="fade-up">Galeri</h1>

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

        <div class="sections my-3">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center mx-auto">
                    <h2 class="font-weight-bold text-primary heading">
                        Galeri
                    </h2>
                </div>
            </div>
        </div>

        <div class="sections section-properties">
            <div class="container ">
                <div class="container">
                    @foreach ($get_galeri_data as $item)
                        <div class="p-5 d-flex justify-content-center">
                            <div class="property-item" style="width: 80%; height:80%"">
                                <a href="{{ route('galeri.detail', ['id_wisata' => $item->Id_wisata]) }}" class="img">
                                    <img src="{{ asset('images/' . $item->Foto) }}" alt="Image" class="img-fluid" />
                                </a>
                                <div class="property-content">
                                    <div>
                                        <span class="d-block mb-2 text-black-50">Kalimantan Tengah,Gunung Mas</span>
                                        <span class="city d-block mb-3">{{ $item->Nama_wisata }}</span>

                                        <a href="{{ route('galeri.detail', ['id_wisata' => $item->Id_wisata]) }}"
                                            class="btn btn-primary py-2 px-3">Lihat
                                            Galeri</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
