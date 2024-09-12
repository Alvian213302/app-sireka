@extends('dashboardmaster')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Cargo Information Notice</h1>
        <p class="mb-4">Cargo Information Notice (CIN) merupakan pengumuman yang dibuat oleh maskapai penerbangan
            mengenai barang yang tidak diperbolehkan pengirimannya melalui pesawat udara kargo.
        </p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">CIN Airlines Table</h6>
                <input type="submit" class="btn btn-primary float-right" value="+ Tambah" data-toggle="modal"
                    data-target="#addModal"></button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Maskapai</th>
                                <th>Nomor Surat</th>
                                <th>Notice</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $no = 1; ?>

                            @foreach ($cin as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->maskapai }}</td>
                                    <td>{{ $data->no_surat }}</td>
                                    <td width="450">{{ $data->notice }}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#detailModal-{{ $data->id }}"><i
                                                class="far fa-eye"></i></button>
                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                            data-target="#deleteModal-{{ $data->id }}"><i
                                                class="far fa-trash-alt"></i></button>
                                        <button type="button" class="btn btn-success" data-toggle="modal"
                                            data-target="#updateModal-{{ $data->id }}"><i
                                                class="fas fa-edit"></i></button>
                                    </td>
                                </tr>
                            @endforeach

                            @foreach ($cin as $data)
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
                                                <form action="/add-cin" method="POST" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Maskapai</label>
                                                            <input type="text" name="maskapai" class="form-control"
                                                                required>
                                                            <input type="hidden" name="id">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Nomor Surat</label><br>
                                                            <input type="text" id="tanggal" name="no_surat"
                                                                class="form-control" required>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Notice</label>
                                                            <textarea name="notice" cols="30" rows="10"
                                                                class="form-control" required></textarea>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Gambar</label>
                                                            <input accept="image/*" type="file" name="gambar"
                                                                class="form-control" required>
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
                                                <h4 class="modal-title" id="updateModalLabel">Update</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/update-cin" method="POST" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Maskapai</label>
                                                            <input type="text" name="maskapai"
                                                                value="{{ $data->maskapai }}" class="form-control">
                                                            <input type="hidden" name="id" value="{{ $data->id }}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Nomor Surat</label>
                                                            <input type="text" name="no_surat"
                                                                value="{{ $data->no_surat }}" class="form-control">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Notice</label>
                                                            <textarea name="notice" cols="30" rows="10"
                                                                class="form-control">{{ $data->notice }}</textarea>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Gambar</label>
                                                            <input type="file" name="gambar" value="gambar"
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
                                                Apakah Anda yakin Menghapus data "{{ $data->maskapai }}"?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">Close</button>
                                                <a href="/delete-cin/{{ $data->id }}" class="btn btn-danger">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Detail Modal -->
                                <div class="modal fade" id="detailModal-{{ $data->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="detailModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="detailModalLabel">Detail CIN</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/detail-cin" method="POST" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <div class="form-group">
                                                        <label>Maskapai</label>
                                                        <input type="text" name="maskapai" value="{{ $data->maskapai }}"
                                                            class="form-control" readonly>
                                                        <input type="hidden" name="id" value="{{ $data->id }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Nomor Surat</label><br>
                                                        <input type="text" id="no_surat" name="no_surat"
                                                            value="{{ $data->no_surat }}" class="form-control"
                                                            readonly>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Notice</label>
                                                        <textarea name="notice" cols="30" rows="10" class="form-control"
                                                            readonly>{{ $data->notice }}</textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Gambar</label><br>
                                                        <center><img src="{{ asset('storage/gambar/' . $data->gambar) }}"
                                                                style="width:200px; height:250px;"></center>
                                                        <!-- <input type="file" id="gambar" name="gambar" value="{{ $data->gambar }}" class="form-control" readonly> -->
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary"
                                                data-dismiss="modal">Kembali</button>
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
