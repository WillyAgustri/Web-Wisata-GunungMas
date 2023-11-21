@extends('admin-layout.app-admin')

@section('admin-content')
    <div class="text-center">
        <h1>Kelola Hotel</h1>
    </div>
    <div class="container-fluid costum-container mt-2 me-4 ">
        <div class="containers ">
            <div>
                <a class=" btn bg-primary text-white btn-sm rounded shadow-lg mb-2 " href="{{ route('tambah-hotel') }}">Tambah
                    Hotel</a>
            </div>



            <div class="card me-5  ">
                <table id="example1" class="table  table-bordered table-striped  " style="font-size: 10dp">
                    <thead class="text-center me-5">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Gambar</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>

                            <td>Gunung mas</td>
                            <td class="text-center">
                                <img src="https://i.ibb.co/DR3sCwr/Tahura-Lapak-Jaru-1024x768.jpg" alt=""
                                    style="max-width: 30%;">
                            </td>
                            <td>-2348234</td>
                            <td>-23761264</td>
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
                                            <a class="dropdown-item " href="{{ route('edit-hotel') }}">
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
                            <th>ID</th>
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>
@endsection
