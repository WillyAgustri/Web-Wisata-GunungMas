@extends('layout.app')


@section('content')

    <head>
        <title>
            Tempat Wisata
        </title>
    </head>

    <body>



        <div class="hero page-inner overlay"
            style="background-image: url('https://i.ibb.co/DR3sCwr/Tahura-Lapak-Jaru-1024x768.jpg')">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-9 text-center mt-5">
                        <h1 class="heading" data-aos="fade-up">Wisata</h1>

                        <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                            <ol class="breadcrumb text-center justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active text-white-50" aria-current="page">
                                    Wisata
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
                        Tempat Pariwisata
                    </h2>
                </div>
            </div>
        </div>

        <div class="sections section-properties">
            <div class="container">
                <div class="row mb-3">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="property-item">
                            <a href="{{ route('detail_wisata') }}" class="img">
                                <img src="https://i.ibb.co/LpVNqZG/air-terjun-bawin-kameloh.jpg" alt="Image"
                                    class="img-fluid" />
                            </a>
                            <div class="property-content">
                                <div>
                                    <span class="d-block mb-2 text-black-50">Kalimantan Tengah, Kuala
                                        Kurun</span>
                                    <span class="city d-block mb-3">Air Terjun Bawin Kameloh</span>

                                    <a href="{{ route('detail_wisata') }}" class="btn btn-primary py-2 px-3">Lihat
                                        Detail</a>
                                </div>
                            </div>
                        </div>
                        <!-- .item -->
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="property-item">
                            <a href="{{ route('detail_wisata') }}" class="img">
                                <img src="https://i.ibb.co/DR3sCwr/Tahura-Lapak-Jaru-1024x768.jpg" alt="Image"
                                    class="img-fluid" />
                            </a>

                            <div class="property-content">
                                <div>
                                    <span class="d-block mb-2 text-black-50">Kalimantan Tengah, Kuala
                                        Kurun</span>
                                    <span class="city d-block mb-3">Tahura lapak Jaru Kurun</span>



                                    <a href="{{ route('detail_wisata') }}" class="btn btn-primary py-2 px-3">Lihat
                                        Detail</a>
                                </div>
                            </div>
                        </div>
                        <!-- .item -->
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="property-item">
                            <a href="{{ route('detail_wisata') }}" class="img">
                                <img src="https://i.ibb.co/6PX4SHg/Batu-Mahasur3.jpg" alt="Image" class="img-fluid" />
                            </a>

                            <div class="property-content">
                                <div>
                                    <span class="d-block mb-2 text-black-50">Kalimantan Tengah, Kuala
                                        Kurun</span>
                                    <span class="city d-block mb-3">Air Terjun Batu Mahasur</span>



                                    <a href="{{ route('detail_wisata') }}" class="btn btn-primary py-2 px-3">Lihat
                                        Detail</a>
                                </div>
                            </div>
                        </div>
                        <!-- .item -->
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="property-item">
                            <a href="{{ route('detail_wisata') }}" class="img">
                                <img src="https://i.ibb.co/BCB2bSc/Batu-suli.jpg" alt="Image" class="img-fluid" />
                            </a>

                            <div class="property-content">
                                <div>
                                    <span class="d-block mb-2 text-black-50">Kalimantan Tengah, Kuala
                                        Kurun</span>
                                    <span class="city d-block mb-3">Batu Suli</span>



                                    <a href="{{ route('detail_wisata') }}" class="btn btn-primary py-2 px-3">Lihat
                                        Detail</a>
                                </div>
                            </div>
                        </div>
                        <!-- .item -->
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 mb-5">
                        <div class="property-item">
                            <a href="{{ route('detail_wisata') }}" class="img">
                                <img src="https://i.ibb.co/WD5F8DV/betang-toyoi.jpg" alt="Image" class="img-fluid" />
                            </a>

                            <div class="property-content">
                                <div>
                                    <span class="d-block mb-2 text-black-50">Kalimantan Tengah, Kuala
                                        Kurun</span>
                                    <span class="city d-block mb-3">
                                        Rumah Adat Betang Toyoi</span>



                                    <a href="{{ route('detail_wisata') }}" class="btn btn-primary py-2 px-3">Lihat
                                        Detail</a>
                                </div>
                            </div>
                        </div>
                        <!-- .item -->
                    </div>
                </div>
            </div>
    </body>

    </html>
@endsection
