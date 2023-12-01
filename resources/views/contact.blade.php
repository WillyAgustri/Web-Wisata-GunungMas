@extends('layout.app')

@section('content')

    <body>
        <div class="hero page-inner overlay"
            style="background-image: url('https://i.ibb.co/DR3sCwr/Tahura-Lapak-Jaru-1024x768.jpg')">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-9 text-center mt-5">
                        <h1 class="heading" data-aos="fade-up">Kontak Kami</h1>
                        <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                            <ol class="breadcrumb text-center justify-content-center">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active text-white-50" aria-current="page">
                                    Contact
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col" style="display: flex;" data-aos="fade-up" data-aos-delay="100">
                        <div class="contact-info">
                            <div class="address mt-2">
                                <i class="icon-room ">
                                    <i class="far fa-user"></i>
                                </i>
                                <h4 class="mb-2">Nama :</h4>
                                <p>
                                    {{ $get_kontak_data->Nama_Kontak }}

                                </p>
                            </div>
                            <div class="open-hours mt-4">
                                <i class="icon-clock-o">
                                    <i class="far fa-envelope"></i>
                                </i>
                                <h4 class="mb-2">Email :</h4>
                                <p>
                                    {{ $get_kontak_data->Email }}
                                </p>
                            </div>
                            <div class="email mt-4">
                                <i class="icon-envelope">
                                    <i class="fas fa-mobile-alt"></i>
                                </i>
                                <h4 class="mb-2">Nomor Telepon:</h4>
                                <p>{{ $get_kontak_data->No_telp }}</p>
                            </div>

                            <div class="mt-4 ">
                                {{ $get_kontak_data->Ket }}
                            </div>
                        </div>
                    </div>
                    <div class="col input-form">
                        <form action="{{ route('home.kontak.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="Nama" class="form-label">Nama</label>
                                <input type="text" class="form-control mb-2" name="Nama" placeholder="Nama Anda">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control mb-2" name="Email"
                                    placeholder="example@gmail.com">
                                <div class="mb-3">
                                    <label for="pesan" class="form-label">Pesan Singkat</label>
                                    <textarea class="form-control" name="Ket" rows="3" placeholder="Isi Pesan Singkat"></textarea>
                                </div>

                                <button type="submit" class="btn btn-sm btn-primary">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        </div>
        @include('sweetalert::alert')

    </body>
@endsection
