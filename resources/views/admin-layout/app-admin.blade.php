<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    {{-- Font Awesome 4.7.0 --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



    {{-- Bootstrap Style CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/dists/css/admin/style.css') }}">
    <title>Admin</title>
</head>

<body>
    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar" class="active" style="background-color:#005555">
            <h1>
                <a class="logo d-flex flex-column justify-content-center ">
                    <span class="text-center fa fa-1x fa-user-circle-o" aria-hidden="true"></span>
                    <h4 class="text-center text-white" style="font-size:14px;">Hi,Admin</h4>
                </a>

            </h1>
            <ul class="list-unstyled components mb-5">
                <li class="active">
                    <a href="{{ route('home-dashboard') }}"><span class="fa fa-home"></span> Home</a>
                </li>
                <li>
                    <a href="{{ route('kelola-admin') }}"><span class="fa fa-lock" aria-hidden="true"></span> Kelola
                        Admin</a>
                </li>
                <li>
                    <a href="{{ route('kelola-wisata') }}"><span class="fa fa-industry" aria-hidden="true"></span>
                        Kelola Wisata</a>
                </li>
                <li>
                    <a href="{{ route('kelola-galeri') }}"><span class="fa fa-picture-o" aria-hidden="true"></span>
                        Kelola Galeri</a>
                </li>
                <li>
                    <a href="{{ route('kelola-tentang') }}"><span class="fa fa-info-circle" aria-hidden="true"></span>
                        Kelola Tentang</a>
                </li>
                <li>
                    <a href="{{ route('kelola-kontak') }}"><span class="fa fa-phone" aria-hidden="true"></span> Kelola
                        Kontak</a>
                </li>
                <li>
                    <a href="{{ route('kelola-hotel') }}"><span class="fa fa-bed" aria-hidden="true"></span> Kelola
                        Hotel</a>
                </li>
                <li>
                    <a href="{{ route('kelola-pesan') }}"><span class="fa fa-envelope-o"
                            aria-hidden="true"></span>Pesan</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-sign-out" aria-hidden="true"></span> Keluar</a>

                </li>
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

            <nav class="navbar navbar-expand-lg navbar-light p-3 " style="background-color: #005555; ">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn" style="background-color:  #005555">
                        <i class="fa fa-bars text-white"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>


                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link text-white" href="#">Kelola Admin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('kelola-wisata') }}">Kelola Wisata</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Kelola Galeri</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Kelola Tentang</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Kelola Kontak</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Kelola Hotel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Keluar</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            @yield('admin-content')


        </div>
    </div>


    {{-- Temporary --}}
    <script src="{{ asset('assets/dists/js/admin/popper.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>


    <script src="{{ asset('assets/dists/js/admin/jquery.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/dists/js/admin/bootstrap.min.js') }}"></script> --}}
    <script src="{{ asset('assets/dists/js/admin/main.js') }}"></script>

</body>

</html>
