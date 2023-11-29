<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    {{-- SEO Optimized --}}
    <meta name="description"
        content="Selamat datang di situs pariwisata Gunung Mas Kuala Kurun. Temukan keindahan alam dan wisata yang menakjubkan di daerah ini.">
    <meta name="keywords" content="pariwisata, Gunung Mas, Kuala Kurun, wisata alam, destinasi wisata">
    <meta name="author" content="Nama Anda atau Nama Perusahaan Anda">


    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}" />

    {{-- Global Style CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/dists/css/style.css') }}">

    {{-- Tiny-Slider --}}
    <link rel="stylesheet" href="{{ asset('assets/dists/css/tiny-slider.css') }}">

    {{-- Aos --}}
    <link rel="stylesheet" href="{{ asset('assets/dists/css/aos.css') }}">

    {{-- font Awesome ver.6.4.2 --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css"
        integrity="sha512-siarrzI1u3pCqFG2LEzi87McrBmq6Tp7juVsdmGY1Dr8Saw+ZBAzDzrGwX3vgxX1NkioYNCFOVC0GpDPss10zQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"
        integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>

    {{-- Responsive Navigasi Mobile --}}
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    {{-- Navigasi --}}
    <nav class="site-nav">
        <div class="container">
            <div class="menu-bg-wrap">
                <div class="site-navigation ">
                    <a href="index.html" class="logo m-0 float-start">Objek Wisata Gunung Mas</a>

                    <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end ">
                        <li class="">
                            <a href="{{ route('home') }}">Beranda</a>
                        </li>
                        <li class="has-childrens">
                            <a href="{{ route('wisata') }}">Wisata</a>
                        </li>
                        <li><a href="{{ route('galeri') }}">Galeri</a></li>
                        <li><a href="{{ route('tentang') }}">Tentang</a></li>
                        <li><a href="{{ route('contact') }}">Kontak</a></li>
                        <li>
                            <button class="btn btn-dark btn-sm"> <a class="text-white"
                                    href="{{ route('login.index') }}">LOGIN</a></button>
                        </li>
                    </ul>
                    s

                    <a href="#"
                        class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
                        data-toggle="collapse" data-target="#main-navbar">
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    {{-- END NAVIGASI --}}

    {{-- KONTENT --}}

    @yield('content')

    {{-- KONTENT --}}




    <div class="site-footer">
        <div class="container">
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <p>
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        . All Rights Reserved. &mdash; By Ivena

                    </p>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.site-footer -->

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>



    <script src="{{ asset('assets/dists/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/dists/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/dists/js/aos.js') }}"></script>
    <script src="{{ asset('assets/dists/js/navbar.js') }}"></script>
    <script src="{{ asset('assets/dists/js/counter.js') }}"></script>
    <script src="{{ asset('assets/dists/js/custom.js') }}"></script>
</body>


</html>
