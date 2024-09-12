@extends('dashboardmaster')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Ekspedisi Muatan Pesawat Udara</h1>
        <p class="mb-4">Berikut data EMPU yang telah melakukan pengiriman barang pada Bandara Sultan Aji Muhammad
            Sulaiman Sepinggan International Airport</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">EMPU Table</h6>
                <input type="submit" class="btn btn-primary float-right" value="+ Tambah" data-toggle="modal"
                    data-target="#addModal"></button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Waktu</th>
                                <th>Ekspedisi</th>
                                <th>Penanggung Jawab</th>
                                <th>Komoditi</th>
                                <th>Koli</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $no = 1; ?>

                            @foreach ($empu as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->tanggal }}</td>
                                    <td>{{ $data->ekspedisi }}</td>
                                    <td>{{ $data->pj }}</td>
                                    <td>{{ $data->komoditi }}</td>
                                    <td>{{ $data->koli }}</td>
                                    <td><button type="button" class="btn btn-danger" data-toggle="modal"
                                            data-target="#deleteModal-{{ $data->id }}"><i
                                                class="far fa-trash-alt"></i></button>
                                        <button type="button" class="btn btn-success" data-toggle="modal"
                                            data-target="#updateModal-{{ $data->id }}"><i
                                                class="fas fa-edit"></i></button>
                                    </td>
                                </tr>
                            @endforeach

                            @foreach ($empu as $data)
                                <!-- Add Modal -->
                                <div class="modal fade" id="addModal" tabindex="-1" role="dialog"
                                    aria-labelledby="addModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="addModalLabel">Tambah CIN</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/add-empu" method="POST" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Nama</label>
                                                            <input type="text" name="pj" class="form-control">
                                                            <input type="hidden" name="id">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Ekspedisi</label>
                                                            <input type="text" name="ekspedisi" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Komoditi</label>
                                                            <input type="text" name="komoditi" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Koli</label>
                                                            <input type="text" name="koli" class="form-control">
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

                                <!-- Delete Modal -->
                                <div class="modal fade" id="deleteModal-{{ $data->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="deleteModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="deleteModalLabel">Delete</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah Anda yakin Menghapus data "{{ $data->ekspedisi }}"?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">Close</button>
                                                <a href="/delete-empu/{{ $data->id }}"
                                                    class="btn btn-danger">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Update Modal -->
                                <div class="modal fade" id="updateModal-{{ $data->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="updateModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="updateModalLabel">Update</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/update-empu" method="POST">
                                                    {{ csrf_field() }}
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Nama</label>
                                                            <input type="text" name="pj" value="{{ $data->pj }}"
                                                                class="form-control">
                                                            <input type="hidden" name="id" value="{{ $data->id }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Ekspedisi</label>
                                                            <input type="text" name="ekspedisi"
                                                                value="{{ $data->ekspedisi }}" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Komoditi</label>
                                                            <input type="text" name="komoditi"
                                                                value="{{ $data->komoditi }}" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Koli</label>
                                                            <input type="text" name="koli" value="{{ $data->koli }}"
                                                                class="form-control">
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
