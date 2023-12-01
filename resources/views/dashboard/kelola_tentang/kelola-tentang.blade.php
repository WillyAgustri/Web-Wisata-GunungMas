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
                        @foreach ($tentang_data as $item)
                            <tr>
                                <td>{{ $item->Id_tentang }}</td>
                                <td>
                                    {{ $item->Des_Tentang }}
                                </td>
                                <td>
                                    <li class="nav-item dropdown d-block">
                                        <a class="nav-link dropdown-toggle   d-flex justify-content-end " href=""
                                            id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <span class="fa fa-2x fa-wrench text-left" aria-hidden="true"></span>
                                        </a>
                                        <ul class="dropdown-menu shadow-sm " aria-labelledby="navbarDropdown">
                                            <li>
                                                <div class="text-center text-dark ">
                                                    <strong> Menu</strong>
                                                    <p><small>
                                                            ID Data : {{ $item->Id_tentang }}
                                                        </small></p>
                                                </div>
                                            </li>
                                            <li class="dropdown-divider"></li>
                                            <li>
                                                <a class="dropdown-item "
                                                    href="{{ route('edit-tentang', ['id_tentang' => $item->Id_tentang]) }}">
                                                    <i class="fa fa-pencil text-warning" aria-hidden="true"></i> Edit
                                                    Data</a>
                                            </li>
                                            <li>
                                                <form
                                                    action="{{ route('dashboard.tentang.destroy', ['tentang' => $item->Id_tentang]) }}"
                                                    method="POST">
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
                        @endforeach
                    </tbody>
                    <tfoot class="text-center">
                        <tr>
                            <th>ID Tentang</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
                {{ $tentang_data->links('pagination::bootstrap-5') }}
            </div>

        </div>
    </div>
@endsection
