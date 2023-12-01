@extends('layout.app')


@section('content')

    <body>
        <div class="hero">
            <div class="hero-slide">
                <div class="img overlay" style="background-image: url('https://i.ibb.co/6PX4SHg/Batu-Mahasur3.jpg')"></div>
                <div class="img overlay" style="background-image: url('https://i.ibb.co/6PX4SHg/Batu-Mahasur3.jpg')"></div>
                <div class="img overlay" style="background-image: url('https://i.ibb.co/BCB2bSc/Batu-suli.jpg')"></div>
            </div>

            {{-- TEXT HERO --}}
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-9 text-center">
                        <h1 class="heading" data-aos="fade-up">
                            SELAMAT DATANG DI WEBSITE OBJEK WISATA GUNUNG MAS
                        </h1>
                    </div>
                </div>
            </div>
            {{-- TEXT HERO END --}}
        </div>

        {{-- Carousel Wisata --}}
        <div class="section"">
        </div>

        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-lg-6">
                    <h2 class="font-weight-bold text-primary heading">
                        Tempat Wisata
                    </h2>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <p>
                        <a href="{{ route('home.wisata.index') }}" class="btn btn-primary text-white py-3 px-4">Lihat
                            Selengkapnya</a>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12  ">
                    <div class="property-slider-wrap ">
                        <div class="property-slider ">

                            @foreach ($get_wisata_data as $wisata_data)
                                <div class="property-item">
                                    <a href="{{ route('wisata.detail', ['id_wisata' => $wisata_data->Id_wisata]) }}"
                                        class="img">
                                        <img src="{{ asset('images/' . $wisata_data->Foto) }}" alt="Image"
                                            class="img-fluid rounded"
                                            style="object-fit: cover; width: 100%; height: 100%;" />

                                    </a>
                                    <div class="property-content">
                                        <div>
                                            <span class="d-block mb-2 text-black-50">Kalimantan Tengah, Gunung Mas</span>
                                            <span class="city d-block mb-3">{{ $wisata_data->Nama_wisata }}</span>

                                            <a href="{{ route('wisata.detail', ['id_wisata' => $wisata_data->Id_wisata]) }}"
                                                class="btn btn-primary py-2 px-3">Lihat
                                                Detail</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .item -->
                            @endforeach

                        </div>


                        <div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
                            <span class="prev" data-controls="prev" aria-controls="property" tabindex="-1">Prev</span>
                            <span class="next" data-controls="next" aria-controls="property" tabindex="-1">Next</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        {{-- END CAROUSEL WISATA --}}


        {{-- GALERI --}}
        <div class="section"></div>


        <div class="container">
            <div class="container">
                <div class="row mb-5 align-items-center">
                    <div class="col-lg-6">
                        <h2 class="font-weight-bold text-primary heading">
                            GALERI WISATA
                        </h2>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <p>
                            <a href="{{ route('home.galeri.index') }}" class="btn btn-primary text-white py-3 px-4">Lihat
                                Selengkapnya</a>
                        </p>
                    </div>
                </div>

                <div class="row">
                    @foreach ($get_galeri_data as $index => $galeri_data)
                        <div class=
                        "property-item col-md-4
                            @if ($index == 1) mt-lg-5 @endif
                            @if ($index == 4) mt-lg-5 @endif
                        shadow-lg p-1"
                            data-aos="fade-up" data-aos-delay="0">
                            <img src="{{ asset('images/' . $galeri_data->Foto) }}" alt="Image" class="img-fluid" />
                        </div>
                    @endforeach


                </div>
                <div class="row section-counter mt-5 d-flex justify-content-center">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <div class="counter-wrap mb-5 mb-lg-0 text-center">
                            <span class="number"><span class="countup text-primary ">{{ $total_wisata_data }}</span></span>
                            <span class="caption text-black-50">Tempat Wisata</span>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3 " data-aos="fade-up" data-aos-delay="400">
                        <div class="counter-wrap mb-5 mb-lg-0 text-center">
                            <span class="number"><span class="countup text-primary">{{ $total_galeri_data }}</span></span>
                            <span class="caption text-black-50">Galeri</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        {{-- END GALERI --}}

        {{-- SECOND SECTION --}}
        <div class="section">
            <div class="row justify-content-center footer-cta" data-aos="fade-up">
                <div class="col-lg-7 mx-auto text-center">
                    <h2 class="mb-4">Ayo Datang ke Tempat Wisata Gunung Mas</h2>
                    <p>
                        <a href="{{ route('home.wisata.index') }}" class="btn btn-primary text-white py-3 px-4">Lihat Tempat
                            Wisata</a>
                    </p>
                </div>
            </div>
        </div>
        {{-- END SECOND SECTION --}}


        <style>

        </style>



    </body>
@endsection
