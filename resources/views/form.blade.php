@extends('master')
@section('konten')

    <div class="container-xxl py-5 bg-dark hero-header ">
        <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-12 text-lg-start ml-5">
                    {{-- <center> --}}
                    <p class="text-white text-center animated slideInLeft mb-4 pb-2"> Silahkan isi form login dibawah
                        ini :
                    </p>
                    <div class="modal-body " style="margin-left: 25%;">
                        <form action="/addempu" method="POST">
                            {{ csrf_field() }}
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="text-white mb-2">Penanggung Jawab</label><br>
                                    <input type="text" id="tanggal" name="pj" class="form-control mb-3" required>
                                </div>


                                <div class="form-group">
                                    <label class="text-white mb-2">Komoditi</label><br>
                                    <input type="text" id="tanggal" name="komoditi" class="form-control mb-3" required>
                                </div>

                                <div class="form-group">
                                    <label class="text-white mb-2">Koli</label><br>
                                    <input type="number" id="tanggal" name="koli" class="form-control mb-3" required>
                                </div>
                            </div>

                    </div>

                    <div style="padding-left: 40%">
                        <input type="submit" class="btn btn-primary btn-block" style="padding-left: 20%; padding-right: 20%"
                            value="Tambah">
                    </div>

                </div>
            </div>
        </div>
        </form>
    </div>
    </div>
    </div>
    </div>

@endsection
