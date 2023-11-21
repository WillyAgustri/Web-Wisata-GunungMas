@extends('admin-layout.app-admin')

@section('admin-content')
    <div class="text-center">
        <h1>Kelola Admin</h1>
    </div>
    <div class="container-fluid costum-container mt-2 me-4 ">
        <div class="containers ">
            <div class="card me-5  ">
                <table id="example1" class="table  table-bordered table-striped" style="font-size: 10dp">
                    <thead class="text-center me-5">
                        <tr>
                            <th>ID Pesan</th>
                            <th>Email</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>300</td>

                            <td>budimo@gmail.com</td>
                            <td>Website ini sangat luar biasa!</td>

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
                                            <a class="dropdown-item " href="{{ route('edit-pesan') }}">
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
                    <tfoot>
                        <tr>
                            <th>ID Pesan</th>
                            <th>Email</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>
@endsection
