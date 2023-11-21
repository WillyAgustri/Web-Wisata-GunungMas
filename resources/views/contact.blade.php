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
                                    <i class="fa-solid fa-location-dot"></i>
                                </i>
                                <h4 class="mb-2">Lokasi:</h4>
                                <p>
                                    Jln.Kuala Kurun
                                    <br>
                                    Kuala Kurun, Gunung Mas
                                </p>
                            </div>
                            <div class="open-hours mt-4">
                                <i class="icon-clock-o">
                                    <i class="fa-regular fa-clock"></i>
                                </i>
                                <h4 class="mb-2">Jam Buka:</h4>
                                <p>
                                    Senin-Jumat:
                                    <br>
                                    8:00 AM - 17.00 PM
                                </p>
                            </div>
                            <div class="email mt-4">
                                <i class="icon-envelope">
                                    <i class="fa-regular fa-envelope"></i>
                                </i>
                                <h4 class="mb-2">Email:</h4>
                                <p>InfoWisataGunungMas@gmail.com</p>
                            </div>
                            <div class="phone mt-4">
                                <i class="icon-phone">
                                    <i class="fa-solid fa-phone" style="color: #ffffff;"></i>
                                </i>
                                <h4 class="mb-2">Call:</h4>
                                <p>+6289691212015</p>
                            </div>
                        </div>
                    </div>
                    <div class="col input-form">
                        <div class="mb-3">
                            <label for="username" class="form-label">Nama</label>
                            <input type="text" class="form-control mb-2" name="username" id=""
                                placeholder="Nama Anda">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control mb-2" name="email" id=""
                                placeholder="example@gmail.com">
                            <div class="mb-3">
                                <label for="pesan" class="form-label">Pesan Singkat</label>
                                <textarea class="form-control" name="pesan" id="" rows="3" placeholder="Isi Pesan Singkat"></textarea>
                            </div>

                            <button type="button" class="btn btn-sm btn-primary">Kirim</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>


    </body>
@endsection
