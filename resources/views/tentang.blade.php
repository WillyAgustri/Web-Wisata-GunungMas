@extends('layout.app')

@section('content')

    <body>
        <div class="hero page-inner overlay"
            style="background-image: url('https://i.ibb.co/DR3sCwr/Tahura-Lapak-Jaru-1024x768.jpg')">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-9 text-center mt-5">
                        <h1 class="heading" data-aos="fade-up">Tentang Kami</h1>
                        <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                            <ol class="breadcrumb text-center justify-content-center">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active text-white-50" aria-current="page">
                                    Tentang Kami
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
                        Tentang Kami
                    </h2>
                </div>
            </div>
        </div>

        <div class="container align-items-center p5" style="font-size: 20px">

            @foreach ($get_tentang_data as $item)
                <p class="p-5">
                    {{ $item->Des_Tentang }}
                </p>
            @endforeach




            <p class="mb-5">
            </p>

        </div>


    </body>
@endsection
