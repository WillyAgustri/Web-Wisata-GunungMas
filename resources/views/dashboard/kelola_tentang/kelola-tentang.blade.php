@extends('admin-layout.app-admin')

@section('admin-content')
    <div class="text-center">
        <h1>Kelola Tentang</h1>
    </div>
    <div class="container-fluid costum-container mt-2 me-4 ">
        <div class="containers ">
            <div>
                <a class=" btn bg-primary text-white btn-sm rounded shadow-lg mb-2 "
                    href="{{ route('tambah-tentang') }}">Tambah
                    Paragraf</a>
            </div>
            <div class="card me-5  ">
                <table id="example1" class="table  table-bordered table-striped  " style="font-size: 10dp">
                    <thead class="text-center me-5">
                        <tr>
                            <th>ID Tentang</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>202</td>
                            <td>
                                Berdasarkan data Badan Pusat Statistik kabupaten Gunung Mas tahun 2020
                                mencatat jumlah
                                penduduk Kuala Kurun
                                sebanyak 12.223 jiwa, atau 40% dari jumlah penduduk di kecamatan Kurun, berada di keluarahan
                                Kuala Kurun
                                dari 15
                                kelurahan/desa. Penduduk berdasarkan jenis kelamin, yakni laki-laki berjumlah 6.412 jiwa dan
                                perempuan
                                berjumlah
                                5.811 jiwa. Suku asli di kelurahan ini yakni suku Dayak Ngaju atau disebut juga Biaju, yang
                                merupakan suku
                                Dayak
                                terbesar di Kalimantan Tengah.

                                Berdasarkan agama kepercayaan, mayoritas penduduk kecamatan Kurun memeluk agama Kristen
                                yakni berjumlah
                                67,18%,
                                dimana Protestan 64,44% dan Katolik 2,74%, yang umumnya berasal dari etnis Dayak. Kemudian
                                Islam 27,44%,
                                Hindu
                                yang umumnya Kaharingan 5,34%, kemudian Budha 0,01% dan lainnya 0,03%.[1]
                            </td>
                            <td>
                                <li class="nav-item dropdown d-block">
                                    <a class="nav-link dropdown-toggle   d-flex justify-content-end " href=""
                                        id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="fa fa-2x fa-wrench text-left" aria-hidden="true"></span>
                                    </a>
                                    <ul class="dropdown-menu shadow-sm " aria-labelledby="navbarDropdown">
                                        <li>
                                            <div class="text-center text-dark ">
                                                <strong> Menu</strong>
                                                <p><small>
                                                        ID Data :
                                                    </small></p>
                                            </div>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li>
                                            <a class="dropdown-item " href="{{ route('edit-tentang') }}">
                                                <i class="fa fa-pencil text-warning" aria-hidden="true"></i> Edit Data</a>
                                        </li>
                                        <li>
                                            <form action="" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="dropdown-item" data-toggle="dropdown">
                                                    <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                                                    Hapus Data</button>
                                            </form>

                                        </li>
                                    </ul>
                                </li>

                            </td>
                        </tr>

                        <tr>
                            <td>203</td>
                            <td>
                                Di kelurahan Kuala Kurun, terdapat 7 sekolah tingkat Taman Kanak-Kanak, dimana 1 TK Negeri
                                yang memiliki 126
                                murid dengan 10 guru dan 6 TK Swasta yang memiliki 333 murid dengan 35 guru. Kemudian
                                terdapat 6 sekolah
                                tingkat Sekolah Dasar, dimana 5 SD Negeri yang memiliki 1.330 murid dengan 95 guru dan 1 SD
                                Swasta yang
                                memiliki 143 murid dengan 5 guru. Sementara terdapat 2 sekolah tingkat Sekolah Menengah
                                Pertama, dimana ada
                                1 SMP Negeri yang memiliki 638 murid dengan 35 guru, dan 1 SMP Swasta yang memiliki 38 murid
                                dengan 3 guru.
                                Kemudian terdapat 2 sekolah tingkat Sekolah Menengah Atas, dimana 1 SMA Negeri yang memiliki
                                699 murid
                                dengan 41 guru, dan 1 SMA Swasta yang memiliki 23 murid dengan 7 guru. Dan ada 1 sekolah
                                tingkat Sekolah
                                Menengah Kejuruan Negeri yang memiliki 435 siswa dengan 35 guru.[1]
                            </td>
                            <td>
                                <li class="nav-item dropdown d-block">
                                    <a class="nav-link dropdown-toggle   d-flex justify-content-end " href="#"
                                        id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="fa fa-2x fa-wrench text-left" aria-hidden="true"></span>
                                    </a>
                                    <ul class="dropdown-menu shadow-sm " aria-labelledby="navbarDropdown">
                                        <li>
                                            <div class="text-center text-dark ">
                                                <strong> Menu</strong>
                                                <p><small>
                                                        ID Data :
                                                    </small></p>
                                            </div>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li>
                                            <a class="dropdown-item " href="">
                                                <i class="fa fa-pencil text-warning" aria-hidden="true"></i> Edit Data</a>
                                        </li>
                                        <li>
                                            <form action="" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="dropdown-item" data-toggle="dropdown">
                                                    <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                                                    Hapus Data</button>
                                            </form>

                                        </li>
                                    </ul>
                                </li>

                            </td>
                        </tr>
                    </tbody>
                    <tfoot class="text-center">
                        <tr>
                            <th>ID Tentang</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>
@endsection
