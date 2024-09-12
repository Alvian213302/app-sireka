@extends('master')
@section('konten')

    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-12 text-center text-lg-start">
                    <h2 class="display-3 text-white animated slideInLeft">Dangerous<br>Goods (DG)</h2>
                    <p class="text-white animated slideInLeft mb-4 pb-2" align="justify"> Beberapa jenis barang yang dikirim
                        melalui udara
                        memiliki potensi yang berbahaya
                        selama proses pengangkutan baik dalam proses penanganannya ataupun pada saat proses pengirimannya.
                        Beberapa barang telah dikategorikan
                        dan diklasifikasikan apakah diperpolehkan atau tidak untuk diangkut melalui udara. Jenis barang yang
                        berpotensi ini ditetapkan sebagai
                        barang berbahaya (BB) atau lebih dikenal sebagai Dangerous Goods (DG).
                        <br>
                        <br>Dangerous Goods (DG) atau barang-barang berbahaya merupakan unsur-unsur zat bahan dan atau
                        barang berbahaya yang sangat peka terhadap suhu udara,
                        tekanan, dan getaran serta dapat mengganggu terhadap kesehatan manusia maupun binatang, dapat
                        menggangu serta membahayakan keselamatan penerbangan
                        apabila diangkut dengan pesawat udara serta dapat merusakkan peralatan pengangkutan. Dangerous Goods
                        (DG) dapat diangkut dengan pesawat udara dan kendaraan
                        angkut lainnya, dengan memenuhi persyaratan, aturan dan prosedur penanganan DG sesuai dengan
                        jenis/kelas/klasifikasi dari barang DG.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Start -->
    <div class="container-xxl pt-5 pb-3">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Klasifikasi</h5>
                <h1 class="mb-5">Barang DG</h1>
            </div>
            <p>Terdapat 9 kelas dan divisi Klasifikasi berdasakan IATA (International Air Transport Association) Dangerous
                Goods atau bahan berbahaya.</p>
            <div class="row g-4">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Kelas 1 (Explosive)
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Semua bahan peledak dan ini sangat dilarang dalam penerbangan, terbagi dalam 6 divisi
                                yaitu:<br><br>
                                - Barang Berbahaya yang mempunyai bahaya ledakan tinggi / mass explosion hazard (REX).<br>
                                - Barang Berbahaya yang mempunyai bahaya proyeksi tinggi (suara keras) / mass projection
                                hazard (REX).<br>
                                - Barang Berbahaya yang mempunyai bahaya hembusan (ledakan) kecil / monitor blast hazard
                                (RCX dan RGX).<br>
                                - Barang Berbahaya yang tidak menimbulkan bahaya berarti / no significant hazard (REX).
                                Terdiri dari 6 group yaitu dengan kode IMP (Interline Message Procedures) adalah RXB, RXC,
                                RXD, RXE, RXG, dan RXS. <br>
                                - Barang Berbahaya yang mempunyai bahaya ledakan tinggi / mass explosion hazard (REX).<br>
                                - Barang Berbahaya yang mempunyai bahaya yang tidak mengakibatkan bahaya ledakan dasyat / no
                                mass explosion hazard (REX), (co. Petasan, Kembang Api, Peluru)
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Kelas 2 (Flammable Gas)
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Berupa gas bertekanan, mudah terbakar dengan 3 (tiga) divisi yaitu:<br><br>
                                - Flamable Gas yaitu gas yang mudah terbakar (RFG).<br>
                                - Non Flamabe Gas (RNG), Non Toxic Gas (RCL), gas-gas ini mempunyai reaksi keras terhadap 02
                                (Karbon Dioksida, Fire Extinguisher, dll).<br>
                                - Toxic Gas atau Gas Beracun (RPG), Jenis Aerosol.<br>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Kelas 3 (Flammable Liquid)
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Berupa cairan yang mudah terbakar dengan titik nyala di bawah 60,5°, di bawah suhu tersebut
                                cairan dapat mengeluarkan asap yang mudah terbakar. Kelas III ini tidak mempunyai divisi.
                                (Contoh: Cat, Alkohol)
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFour" aria-expanded="false"
                                aria-controls="flush-collapseFour">
                                Kelas 4 (Flammable Solid)
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Berupa zat padat yang mudah terbakar dan menimbulkan api melalui gesekan, dengan 3 (tiga)
                                divisi:<br><br>
                                Flammabel solid / zat padat yang mudah terbakar. (Contoh: Korek api)<br>
                                Spontaneous Combustible, yaitu zat yang kalau beraksi dengan udara dapat terbakar dengan
                                sendirinya (RSC). (Contoh: Phospor)<br>
                                Dangerous when wet (bahaya apabila basah). Zat ini akan mudah terbakar atau mengeluarkan gas
                                apabila bercampur dengan air (RFW). (Contoh: Kalsium Karbid)<br>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFive" aria-expanded="false"
                                aria-controls="flush-collapseFive">
                                Kelas 5 (Oxidizing Substances & Organic Peroxides)
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Berupa zat yang mudah menghasilkan O2 yg dapat mengakibatkan kebakaran atau zat yang
                                beroksidasi dan zat organik terpencar, dengan 2 (dua) divisi, yaitu :<br><br>
                                - Zat-zat yang mudah menghasilkan 02, zat ini membantu timbulnya pembakaran atau api dengan
                                mudah. (Contoh: Kalsium Klorat)<br>
                                - Organic Peroxides (ROP)<br><br>
                                Zat padat atau cair yang mudah terbakar dan dapat menimbulkan api apabila terjadi gesekan
                                atau pengisapan uap lembab atau reaksi kimia.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                Kelas 6 (Toxic(Poisonous) Substances)
                            </button>
                        </h2>
                        <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Zat padat / cair yang bila dihirup atau ditelan akan menyebabkan kematian.<br>
                                Bahan atau zat racun dan infections substances atau zat menular. Kelas ini terbagi menjadi 2
                                divisi yaitu:<br><br>
                                - Divisi Toxic (Poison) Substances (RPB)<br>
                                Zat yang menyebabkan kematian, apabila dihirup atau ditelan atau disentuh dengan kulit bisa
                                luka atau membahayakan kesehatan. (Contoh: Pestisida)<br>
                                - Divisi Infections Substances (RIS)<br>
                                Zat yang mengundang micro organisme hidup termasuk bakteri, virus, jamur dll. Yang
                                menyebabkan penyakit pada manusia atau hewan. (Contoh: Hepatitis, Rabies, HIV)
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseSeven" aria-expanded="false"
                                aria-controls="flush-collapseSeven">
                                Kelas 7 (Radioaktif)
                            </button>
                        </h2>
                        <div id="flush-collapseSeven" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Bahan/barang/benda yang memancarkan radiasi yang berbahaya bagi manusia, binatang, dan
                                barang. Sinar tersebut tak dapat dilihat dan hanya dapat dikontrol dengan alat Geiger.
                                Bahan ini terdiri dari tiga kategori. Masing-masing kategori memiliki tingkat radiasi yang
                                berbeda-beda:<br><br>

                                - Kategori I Radioaktif (RRW)<br>
                                Zat ini memiliki tingkat radiasi rendah dan kurang dapat diukur, sehingga tidak memiliki
                                nomor indeks transport (transport index atau T.I). Bahan ini diberi label putih dengan 1
                                (satu) Garis merah. (Contoh: Kobalt 60)<br>
                                - Kategori II<br>
                                Bahan atau zat yang memiliki tingkat radiasi lebih tinggi dari kategori 1 dengan nomor
                                indeks transport tidak lebih dari 1. Zat ini diberi label berwarna kuning pada kemasan
                                dengan 2 (dua) garis merah.<br>
                                - Kategori III<br>
                                Zat ini memiliki tingkat radiasi lebih tinggi dari pada kategori II dan memiliki indeks
                                transport 1,0 dan tidak melebihi 10 per kemasan. Zat ini diberi label kuning dengan 3 (tiga)
                                garis merah.<br>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseEight" aria-expanded="false"
                                aria-controls="flush-collapseEight">
                                Kelas 8 (Corrosive)
                            </button>
                        </h2>
                        <div id="flush-collapseEight" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Bahan yang dapat merusak jaringan kulit atau mempunyai tingkat korosif yang tinggi dan
                                bersifat menimbulkan karat.
                                Bahan ini bentuknya cair atau padat yang dapat menyebabkan kerusakan pada kulit jika
                                disentuh. Jika berasap, sangat berbahaya jika dihirup dan dapat menyebabkan iritasi pada
                                mata, dapat merusak logam (struktur pesawat)
                                atau merusak barang atau kargo. Kelas ini tidak mempunyai divisi. (Contoh: Mercury)
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingNine">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseNine" aria-expanded="false"
                                aria-controls="flush-collapseNine">
                                Kelas 9 (Miscelaneous DG)
                            </button>
                        </h2>
                        <div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Bahan padat atau cair yang mempunyai sifat iritasi atau yang dapat menyebabkan
                                ketidaknyamanan, termasuk dalam kategori benda-benda lainnya yang dianggap dapat
                                membahayakan namun tidak
                                termasuk dalam 8 (delapan) kelas di atas. Kemungkinan dapat menimbulkan bahaya terhadap
                                manusia (petugas), pesawat, apabila tidak ditangani dengan baik.<br><br>

                                Barang berbahaya lain-lain (miscelaneous) terdiri dari 4 bagian:<br>
                                - Kelas 9 (RMD): Miscellaneous Dangerous Goods/BB Lain. Seperti: Engine Internal
                                Combustion<br>
                                - Kelas 9 (RSB): Polymeric beads<br>
                                - Kelas 9 (ICE): Karbon Dioksida atau Dry Ice<br>
                                - Kelas 9 (MAG): Bahan yang mengandung magnet, bila pada jarak 4,6 M dapat menimbulkan efek
                                > 0,418 A/M atau pada kompas jarum tertarik s.d 2°<br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

@endsection
