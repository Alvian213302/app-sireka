<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class kritiksaran_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \App\Models\kritiksaran_model::create([
          'nama_lengkap' => 'Many Paquiao',
          'kritiksaran' => 'Websitenya Keren banget'
      ]);
      \App\Models\kritiksaran_model::create([
        'nama_lengkap' => 'Greg Nwokolo',
        'kritiksaran' => 'Baru tau saya ada regulated agent di airport'
    ]);
    \App\Models\kritiksaran_model::create([
      'nama_lengkap' => 'Riska',
      'kritiksaran' => 'Saya jadi tau mengenai pemeriksaan barang kargo di airport karena website ini'
  ]);
    }
}
