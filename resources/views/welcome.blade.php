@extends('master')
@section('konten')

    <body>
        <div class="container-xxl py-5  bg-dark hero-header mb-5">
            <div class="container my-5 py-5">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h1 class="display-2 text-white animated slideInLeft">Regulated<br>Agent</h1>
                        <p class="text-white animated slideInLeft mb-4 pb-2"> "Service, Security, Safety, & Compliance"</p>
                        <a href="https://www.youtube.com/watch?v=gT7_EmHuAQo"
                            class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Selengkapnya</a>
                    </div>
                    <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                        <img class="img-fluid" src="img/hero.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">C I N</h5>
                    <h1 class="mb-5">Maskapai Penerbangan</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0" src="{{ asset('storage/gambar/' . $data[0]->gambar) }}"
                                style="width: 70px; height: 60px;">
                            <div class="ps-3">
                                <h5 class="mb-1">{{ $data[0]->maskapai }}</h5>
                                <small>{{ $data[0]->no_surat }}</small>
                            </div>
                        </div><br>
                        <p align='justify'>{{ $data[0]->notice }}</p>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0" src="{{ asset('storage/gambar/' . $data[1]->gambar) }}"
                                style="width: 70px; height: 60px;">
                            <div class="ps-3">
                                <h5 class="mb-1">{{ $data[1]->maskapai }}</h5>
                                <small>{{ $data[1]->no_surat }}</small>
                            </div>
                        </div><br>
                        <p align='justify'>{{ $data[1]->notice }}</p>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0" src="{{ asset('storage/gambar/' . $data[2]->gambar) }}"
                                style="width: 70px; height: 60px;">
                            <div class="ps-3">
                                <h5 class="mb-1">{{ $data[2]->maskapai }}</h5>
                                <small>{{ $data[2]->no_surat }}</small>
                            </div>
                        </div><br>
                        <p align='justify'>{{ $data[2]->notice }}</p>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0" src="{{ asset('storage/gambar/' . $data[3]->gambar) }}"
                                style="width: 70px; height: 60px;">
                            <div class="ps-3">
                                <h5 class="mb-1">{{ $data[3]->maskapai }}</h5>
                                <small>{{ $data[3]->no_surat }}</small>
                            </div>
                        </div><br>
                        <p align='justify'>{{ $data[3]->notice }}</p>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0" src="{{ asset('storage/gambar/' . $data[4]->gambar) }}"
                                style="width: 70px; height: 60px;">
                            <div class="ps-3">
                                <h5 class="mb-1">{{ $data[4]->maskapai }}</h5>
                                <small>{{ $data[4]->no_surat }}</small>
                            </div>
                        </div><br>
                        <p align='justify'>{{ $data[4]->notice }}</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Airline</h5>
                    <h1 class="mb-5">Pesawat Mitra Kargo</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <center><i class="fa fa-3x text-primary mb-4"><img src="img/airline/garuda.png"
                                            height="70px" width="100px"></center></i>
                                <h5>Garuda Indonesia</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <center><i class="fa fa-3x text-primary mb-4"><img src="img/airline/lion.png" height="40px"
                                            width="150px"></center></i><br>
                                <h5>Lion Air</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <center><i class="fa fa-3x text-primary mb-4"><img src="img/airline/citilink.png"
                                            height="70px" width="100px"></center></i>
                                <h5>Citilink</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <center><i class="fa fa-3x text-primary mb-4"><img src="img/airline/sriwijaya.png"
                                            height="70px" width="100px"></center></i>
                                <h5>Sriwijaya Air</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <center><i class="fa fa-3x text-primary mb-4 pb-2"><img src="img/airline/trimg.png"
                                            height="70px" width="150px"></center></i>
                                <h5>Tri M-G Airlines</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <center><i class="fa fa-3x text-primary mb-4 pb-3"><img src="img/airline/batik.png"
                                            height="60px" width="100px"></center></i>
                                <h5>Batik Airlines</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <center><i class="fa fa-3x text-primary mb-4 pb-4"><img src="img/airline/wings.png"
                                            height="40px" width="150px"></center></i>
                                <h5>Wings Air</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <center><i class="fa fa-3x text-primary mb-4 pb-3"><img src="img/airline/myindo.png"
                                            height="50px" width="100px"></center></i>
                                <h5>My Indo Airlines</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->

        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Mitra</h5>
                    <h1 class="mb-5">Ekspedisi Muatan Pesawat Udara</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane fade show p-0 active">
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <div class="d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="img/empu/sn.webp" alt=""
                                                style="width: 100px;">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span>PT. Suryagita Nusaraya</span>
                                                </h5>
                                                <small class="fst-italic">Jl. Jend. Sudirman Komp. Balikpapan Permai
                                                    Blok G-1 No. 35 - 37<br>
                                                    Tel : 0542-427715 (Hunting) Fax : 0542-427714
                                                    Balikpapan, Kalimantan Timur<br></small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="img/empu/dbm.png" alt=""
                                                style="width: 100px;">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span>PT. Dharma Bandar Mandala</span>
                                                </h5>
                                                <small class="fst-italic">Gunung Bakaran, Jl. Marsma R. Iswahyudi No.12,
                                                    RT.056, Gn. Bahagia, Kecamatan Balikpapan Selatan, Kota Balikpapan,
                                                    Kalimantan Timur 76114</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="img/empu/purindo.png" alt=""
                                                style="width: 100px;">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span>PT. Purindo Express Nusantara</span>
                                                </h5>
                                                <small class="fst-italic">Jl. Jenderal Sudirman No.429 RT. 42, Damai,
                                                    Kecamatan Balikpapan Selatan, Kota Balikpapan, Kalimantan Timur 76114,
                                                    No Telp : 081351779768</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="img/empu/pandu.png" alt=""
                                                style="width: 100px;">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span>PT. Pandu Siwi Sentosa</span>
                                                </h5>
                                                <small class="fst-italic">Jl. Jend. Sudirman No. 742, Gunung Bahagia,
                                                    Balikpapan Selatan, Balikpapan City, East Kalimantan 76114, No Telp :
                                                    (0542) 763356</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="img/empu/att.png" alt=""
                                                style="width: 100px;">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span>PT. Anugerah Tangkas Transportindo</span>
                                                </h5>
                                                <small class="fst-italic">Jl. Marsma R. Iswahyudi No.3, Sepinggan,
                                                    Kecamatan Balikpapan Selatan, Kota Balikpapan, Kalimantan Timur
                                                    76115</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="img/empu/jnt.png" alt=""
                                                style="width: 100px;">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span>PT. Global Express Sejahtera</span>
                                                </h5>
                                                <small class="fst-italic">Jl DI Panjaitan Ruko Segiri 2 Bl A/15-A.
                                                    Balikpapan Tengah.. Kode Pos 76122, Balikpapan, Kalimantan
                                                    Timur.</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="img/empu/aplog.png" alt=""
                                                style="width: 100px;">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span>PT. Angkasa Pura Logistics</span>
                                                </h5>
                                                <small class="fst-italic">Jl. Marsma R. Iswahyudi No.70, Gn. Bahagia,
                                                    Balikpapan Sel., Kota Balikpapan, Kalimantan Timur 76114,
                                                    Indonesia</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="img/empu/aircargo.png" alt=""
                                                style="width: 100px;">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span>CV. Kalimantan Arum Cargo</span>
                                                </h5>
                                                <small class="fst-italic">JL. Mandiri 2, RT. 77, Komp. Her Utama
                                                    Mandiri, Sepinggan, Kecamatan Balikpapan Selatan, Kota Balikpapan,
                                                    Kalimantan Timur 76116</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="img//empu/aircargo.png"
                                                alt="" style="width: 100px;">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span>PT. Primanusa Mitra Indonesia</span>
                                                </h5>
                                                <small class="fst-italic">Jl. Abdi Praja III No.38, Sepinggan,
                                                    Kecamatan Balikpapan Selatan, Kota Balikpapan, Kalimantan Timur
                                                    76115</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <!-- Menu End -->


        <!-- Kritik Saran Start -->
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="video">
                    </div>
                </div>
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">APlog</h5>
                        <h1 class="text-white mb-4">Kritik dan Saran</h1>
                        <form action="/add-kritiksaran" method="post">
                            {{ csrf_field() }}
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="nama_lengkap"
                                            placeholder="Your Name" style=" width: 100%" required>
                                        <label for="name">Nama</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Special Request" name="kritiksaran"
                                            style="height: 100px; width: 100%"></textarea>
                                        <label for="message">Tulis Disini</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                                allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reservation Start -->

    @endsection
