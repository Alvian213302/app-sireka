@extends('dashboardmaster')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data User</h1>
        <p class="mb-4">Data ekspedisi yang telah bermitra dengan Angkasa Pura Logistics dalam melakukan
            operasional
            pengiriman barang.
        </p>

        <!-- Admin Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Admin Table</h6>
                <input type="submit" class="btn btn-primary float-right" value="+ Tambah" data-toggle="modal"
                    data-target="#addModal"></button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Admin</th>
                                <th>Email</th>
                                <th>Nomor Telepon</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $no = 1; ?>

                            @foreach ($tampiladmin as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->nomor_telepon }}</td>
                                    <td>
                                        <button type="button" class="btn btn-success" data-toggle="modal"
                                            data-target="#updateModal-{{ $data->id }}"><i
                                                class="fas fa-edit"></i></button>
                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                            data-target="#deleteModal-{{ $data->id }}"><i
                                                class="far fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                            @endforeach

                            @foreach ($tampiladmin as $data)
                                <!-- Add Modal -->
                                <div class="modal fade" id="addModal" tabindex="-1" role="dialog"
                                    aria-labelledby="addModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="addModalLabel">Tambah EMPU</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/add-ekspedisi" method="POST">
                                                    {{ csrf_field() }}
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Nama Ekspedisi</label>
                                                            <input type="text" name="name" class="form-control" required>
                                                            <input type="hidden" name="id">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Email</label><br>
                                                            <input type="email" name="email" class="form-control"
                                                                required>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Nomor Telepon</label><br>
                                                            <input type="number" name="nomor_telepon" class="form-control"
                                                                required>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Password</label><br>
                                                            <input type="password" name="password" class="form-control"
                                                                required>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Role</label><br>
                                                            <select id="opt1" class="form-control form-select" name="role"
                                                                required>
                                                                <option value="select">-- Pilih List --</option>
                                                                <option value="admin">Admin</option>
                                                                <option value="user">User</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">Close</button>
                                                <input type="submit" class="btn btn-success" value="Tambah">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </form>

                                <!-- Update Modal -->
                                <div class="modal fade" id="updateModal-{{ $data->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="updateModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="updateModalLabel">Update Admin</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/update-admin" method="POST">
                                                    {{ csrf_field() }}
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Nama Ekspedisi</label>
                                                            <input type="text" name="name" class="form-control"
                                                                value="{{ $data->name }}">
                                                            <input type="hidden" name="id" value="{{ $data->id }}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Email</label><br>
                                                            <input type="email" name="email" class="form-control"
                                                                value="{{ $data->email }}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Nomor Telepon</label><br>
                                                            <input type="number" name="nomor_telepon" class="form-control"
                                                                value="{{ $data->nomor_telepon }}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Password</label><br>
                                                            <input type="password" name="password" class="form-control"
                                                                value="{{ $data->password }}">
                                                        </div>
                                                    </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">Close</button>
                                                <input type="submit" class="btn btn-success" value="Ubah"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </form>

                                <!-- Delete Modal -->
                                <div class="modal fade" id="deleteModal-{{ $data->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="deleteModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="deleteModalLabel">Delete</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah Anda yakin Menghapus data "{{ $data->name }}"?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">Close</button>
                                                <a href="/delete-admin/{{ $data->id }}"
                                                    class="btn btn-danger">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- EMPU Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">User Table</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Ekspedisi</th>
                                    <th>Email</th>
                                    <th>Nomor Telepon</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $no = 1; ?>

                                @foreach ($tampiluser as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->nomor_telepon }}</td>
                                        <td>
                                            <button type="button" class="btn btn-success" data-toggle="modal"
                                                data-target="#updateModal-{{ $data->id }}"><i
                                                    class="fas fa-edit"></i></button>
                                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                                data-target="#deleteModal-{{ $data->id }}"><i
                                                    class="far fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                @endforeach

                                @foreach ($tampiluser as $data)
                                    <!-- Update Modal -->
                                    <div class="modal fade" id="updateModal-{{ $data->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="updateModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="updateModalLabel">Update Admin</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/update-admin" method="POST">
                                                        {{ csrf_field() }}
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label>Nama Ekspedisi</label>
                                                                <input type="text" name="name" class="form-control"
                                                                    value="{{ $data->name }}">
                                                                <input type="hidden" name="id" value="{{ $data->id }}">
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Email</label><br>
                                                                <input type="email" name="email" class="form-control"
                                                                    value="{{ $data->email }}">
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Nomor Telepon</label><br>
                                                                <input type="number" name="nomor_telepon"
                                                                    class="form-control"
                                                                    value="{{ $data->nomor_telepon }}">
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Password</label><br>
                                                                <input type="password" name="password"
                                                                    class="form-control" value="{{ $data->password }}">
                                                            </div>
                                                        </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                    <input type="submit" class="btn btn-success" value="Ubah"></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </form>


                                    <!-- Delete Modal -->
                                    <div class="modal fade" id="deleteModal-{{ $data->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="deleteModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="deleteModalLabel">Delete</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah Anda yakin Menghapus data "{{ $data->name }}"?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                    <a href="/delete-admin/{{ $data->id }}"
                                                        class="btn btn-danger">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
@endsection
