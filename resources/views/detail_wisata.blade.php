@extends('layout.app')


@section('content')

    <body>




        <div class="hero page-inner overlay" style="background-image: url('https://i.ibb.co/6PX4SHg/Batu-Mahasur3.jpg')">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-9 text-center mt-5">
                        <h1 class="heading" data-aos="fade-up">Detail Wisata </h1>

                        <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                            <ol class="breadcrumb text-center justify-content-center">
                                <li class="breadcrumb-item active text-white-50"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active text-white" aria-current="page">
                                    Wisata
                                </li>
                                <li class="breadcrumb-item active text-white" aria-current="page">
                                    Detail
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        {{-- FOTO DAN MAP --}}
        <div class="section ">
            <div class="container">
                <div class="row justify-content-between mb-1">
                    <div class="col-lg-5 mb-1  order-lg-2" style="height:30%">
                        <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
                            <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div>
                            <div style="width: 100%">
                                <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0"
                                    marginwidth="0"
                                    src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q={{ urlencode($get_detail_data->Latitude) }},{{ urlencode($get_detail_data->Longitude) }}&amp;t=h&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                                </iframe>
                            </div>


                        </div>
                    </div>

                    <div class="col-lg-7 mb-1 mb-lg-0 order-lg-2">
                        <div class="img-about dots">
                            <img src="{{ asset('images/' . $get_detail_data->Foto) }}" alt="Image" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- END FOTO DAN MAP --}}


        {{-- DESKRIPSI WISATA --}}
        <div class="section">
            <div class="container">
                <div class=" text-left ">
                    <h2 class="font-weight-bold heading text-center mb-4">Pariwisata {{ $get_detail_data->Nama_wisata }}
                    </h2>
                    <div class="d-flex justify-content-center align-items-center text-center" style="font-size: 24px;">
                        {{ $get_detail_data->Des_wisata }}
                    </div>

                    </p>
                </div>
            </div>
        </div>
        {{-- END DESKRIPSI WISATA --}}

        {{-- START GALERI --}}
        <div class="container ">
            <h1 class="text-start mb-2 text-center">Galeri Batu Mahasur</h1>
            <div class="container" style="width:100vh">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            @foreach ($get_foto_data as $key => $detail_data)
                                <button type="button" data-bs-target="#carouselExampleIndicators"
                                    data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"
                                    aria-label="Slide {{ $key + 1 }}"></button>
                            @endforeach
                        </div>

                        <div class="carousel-inner">
                            @foreach ($get_foto_data as $key => $detail_data)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                    <img src="{{ asset('images/' . $detail_data->Foto) }}" class="d-block w-100 img-fluid"
                                        alt="Slide {{ $key + 1 }}" style="object-fit: cover; height: 500px;">


                                </div>
                            @endforeach
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                </div>
            </div>

            {{-- END GALERI --}}

            {{-- START HOTEL --}}
            <div class="container ">
                <h1 class="text-start mb-2 mt-5">Hotel Terdekat</h1>
                <div class="property-slider-wrap"">
                    <div class="property-slider ">
                        @foreach ($get_hotels_data as $hotel)
                            <div class="property-item">
                                <a href="" class="img">
                                    <img src="{{ asset('images/' . $hotel->Gambar) }}" alt="Image" class="img-fluid" />
                                </a>

                                <div class="property-content text-center">
                                    <div>
                                        <span class="d-block mb-2 text-black-50">Jarak:
                                            {{ round($hotel->distance, 2) }} KM</span>
                                        <span class="city d-block mb-3">{{ $hotel->Nama_hotel }}</span>
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

            <script src="{{ asset('assets/dists/js/map.js') }}"></script>
    </body>
@endsection
