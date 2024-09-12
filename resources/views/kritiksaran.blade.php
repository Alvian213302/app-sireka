@extends('dashboardmaster')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Kritik & Saran</h1>
        <p class="mb-4">Data Kritik & Saran yang masuk dari website dapat dilihat pada tabel dibawah ini.
        </p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Kritik & Saran Table</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kritik dan Saran</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $no = 1; ?>

                            @foreach ($welcome as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->nama_lengkap }}</td>
                                    <td>{{ $data->kritiksaran }}</td>
                                    <td>
                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                            data-target="#deleteModal-{{ $data->id }}"><i
                                                class="far fa-trash-alt"></i></button>
                                        <button type="button" class="btn btn-success" data-toggle="modal"
                                            data-target="#updateModal-{{ $data->id }}"><i
                                                class="fas fa-edit"></i></button>
                                    </td>
                                </tr>
                            @endforeach

                            @foreach ($welcome as $data)
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
                                                <form action="/update-kritiksaran" method="POST">
                                                    {{ csrf_field() }}
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Nama</label>
                                                            <input type="text" name="nama_lengkap"
                                                                value="{{ $data->nama_lengkap }}" class="form-control">
                                                            <input type="hidden" name="id" value="{{ $data->id }}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>kritiksaran</label>
                                                            <textarea name="kritiksaran" cols="30" rows="10"
                                                                class="form-control">{{ $data->kritiksaran }}</textarea>
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
                                                Apakah Anda yakin Menghapus data "{{ $data->nama_lengkap }}"?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">Close</button>
                                                <a href="/delete-kritiksaran/{{ $data->id }}"
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
