@extends('admin-layout.app-admin')

@section('admin-content')
    <div class="text-center">
        <h1>Kelola Galeri</h1>
    </div>
    <div class="container-fluid costum-container mt-2 me-4 ">
        <div class="containers ">
            <div>
                <a class=" btn bg-primary text-white btn-sm rounded shadow-lg mb-2 "
                    href="{{ route('tambah-galeri') }}">Tambah
                    Galeri</a>
            </div>



            <div class="card me-5  ">
                <table id="example1" class="table  table-bordered table-striped  " style="font-size: 10dp">
                    <thead class="text-center me-5">
                        <tr>
                            <th>ID Galeri</th>
                            <th>ID Wisata</th>
                            <th>Gambar</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td class="text-center">
                                <img src="https://i.ibb.co/DR3sCwr/Tahura-Lapak-Jaru-1024x768.jpg" alt=""
                                    style="max-width: 20%;">
                            </td>

                            <td>
                                <li class="nav-item dropdown d-flex ">
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
                                            <a class="dropdown-item " href="{{ route('edit-galeri') }}">
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
                            <td>2</td>
                            <td>3</td>
                            <td class="text-center">
                                <img src="https://i.ibb.co/MC8TmgY/Batu-Mahasur.jpg" alt="" style="max-width: 20%;">
                            </td>

                            <td>
                                <li class="nav-item dropdown d-flex ">
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
                            <th>ID Foto</th>
                            <th>ID Wisata</th>
                            <th>Gambar</th>
                            <th>Aksi</th>

                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>
@endsection
