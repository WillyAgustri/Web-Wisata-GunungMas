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
                            <script>
                                (function() {
                                    var setting = {
                                        "query": "Kuala Kurun, Gunung MAS Regency, Central Kalimantan, Indonesia",
                                        "width": 800,
                                        "height": 600,
                                        "satellite": true,
                                        "zoom": 12,
                                        "placeId": "ChIJaY1_ZdCm_i0RkTmRbeRdPPo",
                                        "cid": "0xfa3c5de46d913991",
                                        "coords": [-1.0643521, 113.8941657],
                                        "lang": "en",
                                        "queryString": "Kuala Kurun, Gunung MAS Regency, Central Kalimantan, Indonesia",
                                        "centerCoord": [-1.0643521, 113.8941657],
                                        "id": "map-9cd199b9cc5410cd3b1ad21cab2e54d3",
                                        "embed_id": "1006816"
                                    };
                                    var d = document;
                                    var s = d.createElement('script');
                                    s.src = 'https://1map.com/js/script-for-user.js?embed_id=1006816';
                                    s.async = true;
                                    s.onload = function(e) {
                                        window.OneMap.initMap(setting)
                                    };
                                    var to = d.getElementsByTagName('script')[0];
                                    to.parentNode.insertBefore(s, to);
                                })();
                            </script><a href="https://1map.com/map-embed">1 Map</a>
                        </div>
                    </div>

                    <div class="col-lg-7 mb-1 mb-lg-0 order-lg-2">
                        <div class="img-about dots">
                            <img src="https://i.ibb.co/6PX4SHg/Batu-Mahasur3.jpg" alt="Image" class="img-fluid" />
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
                    <h2 class="font-weight-bold heading text-center mb-4">Pariwisata Air batu Mahasur</h2>
                    <div class="d-flex justify-content-center align-items-center text-center" style="font-size: 24px;">
                        Lokasi Air Terjun Batu Mahasur terletak ± 2 Km dari pusat kota Kuala Kurun, dengan ketinggian 15
                        meter, Air Terjun ini dikenal oleh masyarakat Kabupaten Gunung Mas sebagai obyek wisata kota yang
                        mudah dijangkau, dekat dengan pusat kota. Di kawasan ini pula terdapat hutan kota yang didalamnya
                        terdapat berbagai jenis pohon dengan suasana alam yang asri. Air mengalir di antara bebatuan

                        membentuk curuk, mengaliri sungai yang bermuara ke sungai Kahayan, serta jalur treking mengitari air
                        terjun. Di kawasan ini kita dapat melihat berbagai macam tanaman dan pohon yang sengaja dipelihara,
                        menciptakan suasana hutan yang masih asri dan indah. Keindahan alam tempat ini masih terjaga,
                        sehingga kita masih bisa merasakan udara sejuk dengan pemandangan air terjun serta rindangnya
                        pepohonan. Karena letaknya yang sangat dekat dengan pusat kota, air terjun Batu mahasur merupakan
                        tempat rekreasi favorit bagi warga Kuala Kurun. Fasilitas yang tersedia seperti panggung hiburan,
                        Gazebo, ruang ganti, toilet, dan rumah jaga. Untuk menjangkau objek wisata ini, wisatawan dapat
                        menggunakan kendaraan pribadi seperti mobil atau motor, dan objek wisata ini pun dapat menjadi
                        tempat untuk liburan bagi wisatawan dari luar yang mungkin berombongan.

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
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://i.ibb.co/MC8TmgY/Batu-Mahasur.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://i.ibb.co/DR3sCwr/Tahura-Lapak-Jaru-1024x768.jpg" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://i.ibb.co/DR3sCwr/Tahura-Lapak-Jaru-1024x768.jpg" class="d-block w-100"
                                alt="...">
                        </div>
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
                    <div class="property-item  ">
                        <a href="property-single.html" class="img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAdYfGXpsH1uHB29kMbiq_w8o0N3DRyNTITg&usqp=CAU"
                                alt="Image" class="img-fluid" />
                        </a>
                        <div class="property-content text-center ">
                            <div>
                                <span class="d-block mb-2 text-black-50">Jarak : 1 KM</span>
                                <span class="city d-block mb-3">Hotel Kira</span>
                            </div>
                        </div>
                    </div>
                    <!-- .item -->

                    <div class="property-item">
                        <a href="property-single.html" class="img">
                            <img src="https://www.celebes.co/borneo/wp-content/uploads/2021/03/Hotel-Aristo.jpg"
                                alt="Image" class="img-fluid" />
                        </a>
                        <div class="property-content text-center">
                            <div>
                                <span class="d-block mb-2 text-black-50">Jarak : 3 KM</span>
                                <span class="city d-block mb-3">Hotel Gunungmas</span>
                            </div>
                        </div>
                    </div>
                    <!-- .item -->

                    <div class="property-item">
                        <a href="property-single.html" class="img">
                            <img src="https://www.celebes.co/borneo/wp-content/uploads/2021/03/Hotel-Grace.jpg"
                                alt="Image" class="img-fluid" />
                        </a>
                        <div class="property-content text-center">
                            <div>
                                <span class="d-block mb-2 text-black-50">Jarak : 4 KM</span>
                                <span class="city d-block mb-3">Hotel TI</span>
                            </div>
                        </div>
                    </div>
                    <!-- .item -->

                    <div class="property-item">
                        <a href="property-single.html" class="img">
                            <img src="https://i.ibb.co/DR3sCwr/Tahura-Lapak-Jaru-1024x768.jpg" alt="Image"
                                class="img-fluid" />
                        </a>

                        <div class="property-content text-center">
                            <div>
                                <span class="d-block mb-2 text-black-50">Jarak : 6 KM</span>
                                <span class="city d-block mb-3">Hotel Iven</span>
                            </div>
                        </div>
                    </div>
                    <!-- .item -->
                    <div class="property-item">
                        <a href="property-single.html" class="img">
                            <img src="https://i.ibb.co/DR3sCwr/Tahura-Lapak-Jaru-1024x768.jpg" alt="Image"
                                class="img-fluid" />
                        </a>

                        <div class="property-content text-center">
                            <div>
                                <span class="d-block mb-2 text-black-50">Jarak : 10 KM</span>
                                <span class="city d-block mb-3">Hotel Ridhoi</span>
                            </div>
                        </div>
                    </div>
                    <!-- .item -->
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
