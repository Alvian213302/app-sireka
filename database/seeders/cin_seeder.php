<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class cin_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\cin_model::create([
            'gambar' => 'garuda.png',
            'maskapai' => 'Garuda Indonesia',
            'no_surat' => 'No: QA/007/IV/2021',
            'notice' =>'Mobile phone (handphone) semua tipe merek Vivo dilarang untuk diterima atau diangkut melalui kargo udara - 
                        Spare part, aksesoris, dan selubung casing smartphone tanpa lithium battery) dapat diterima dan diangkut melalui kargo udara - 
                        Petugas Cargo Acceptance (AVSEC) harus memastikan setiap pengiriman mobile phone (handphone) yang akan dikirim tidak terdapat merek Vivo (semua tipe), dibuktikan dengan packing list yang ada dan atau pemeriksaan fisik secara acak (random check) - 
                        Semua unit dan personil operasional kargo agar mengimplementasikan Standard Operationg Procedures (SOP) secara konsisten dan dimonitor dengan baik guna aspek safety dan security tetap terjaga.' 
        ]);
        \App\Models\cin_model::create([
            'gambar' => 'batik.png',
            'maskapai' => 'Batik Air',
            'no_surat' => 'No: 02/SSQ/SCN/IV/2021',
            'notice' =>'Telepon genggam ( Handphone ) semua tipe merek VIVO DILARANG untuk diterima / diangkut melalui kargo udara - 
                        Petugas cargo acceptance / AVSEC harus memastikan setiap pengiriman telepon genggam ( Handphone ) yang akan dikirim tidak terdapat telepon genggam ( handphone ) merk VIVO ( semua tipe ), dibuktikan dengan packing list yang ada dan atau pemeriksaan fisik secara acak ( random check ) - 
                        Semua unit dan personil operasional kargo agar mengimplementasikan Standard Operating Procedures ( SOP ) yang berlaku secara konsisten dan dimonitor dengan baik guna terciptanya kondisi yang aman dan selamat - 
                        Security Notice ini berlaku di seluruh Station yang diterbangi Batik Air.' 
        ]);
        \App\Models\cin_model::create([
            'gambar' => 'citilink.png',
            'maskapai' => 'Citilink',
            'no_surat' => 'No: NG/008/2021',
            'notice' =>'Efektif tanggal 14 april 2021 kami sampaikan pelarangan / penghentian pengangkutan handphone merk VIVO ( All Type - With Lithium Batteries ) dalam seluruh penerbangan Citilink hingga hasil proses investigasi yang dilakukan oleh otoritas Bandar Udara Hongkong (HKCAD) dinyatakan selesai.' 
        ]);
        \App\Models\cin_model::create([
            'gambar' => 'airasia.png',
            'maskapai' => 'AirAsia',
            'no_surat' => 'No: -',
            'notice' =>'Semua jenis dan kelas barang berbahaya ( dangerous goods ) yang terdapat dalam iata dangerouse goods regulation manual terbaharui,kecuali es kering atau dry ice sebagai media pendingin untuk kargo komoditi mudah rusak (perishhable).dengan berat dry ice yang diperbolehkan diangkut oleh airasia adalah maksimum 2 kg per kemasan kargo - 
                        Binatang hidup ( live animal ),kecuali ikan hidup ( live tropical fish) kepiting hidup (live crabs),cacing hidup (live worm),kerang hidup (live shell),belut hidup (live eel) - 
                        Barang berharga ( value & vuinearable cargo ) - 
                        Cairan ( liquid ) , kecuali cairan bukan termasuk jenis barang berbahaya (dangerous goods) digunakan untuk media pendukung komoditi ikan hidup dan sejenisnya - 
                        Jenazah ( human remain ) dan abu jenazah ( ashes ) - 
                        Komoditi sirip ikan hiu ( shark fin ) , ikan pari manta ( manta rays)' 
        ]);
        \App\Models\cin_model::create([
            'gambar' => 'citilink.png',
            'maskapai' => 'Citilink',
            'no_surat' => 'No: NG/012/2021',
            'notice' =>'Tidak mengirimkan barang yang dilarang yang tercantum pada IATA-DGR (Substances are not Prohibited for transport by air, see subsection 2.1 and subsection 4.2 on the latest IATA-DGR) - 
                        Mitra agent wajib memastikan pengiriman kargo sesuai dengan tanggal reservasi keberangkatan - 
                        Mitra agent harus memastikan isi dari seluruh dokumen (PTI, SMU, Surat Karantina dan dokumen pendukung lainnya) telah sesuai dengan isi kargo yang akan dikirimkan - 
                        Mitra agent harus memastikan isi kargo yang akan dikirim tidak termasuk barang yang dilarang (point 1) untuk diangkut di dalam Penerbangan - 
                        Mitra Regulated agent dan/atau Airport Security (Non-RA) wajib melakukan proses pemeriksaan kargo sesuai dengan Standard Operational Procedure.' 
        ]);
    }
}
