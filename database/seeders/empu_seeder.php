<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class empu_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\empu_model::create([
            'ekspedisi' => 'APLOG',
            'pj' => 'Cristian',
            'komoditi' => 'Dokumen Paket',
            'Koli' => '15',
            'tanggal' => '2021-05-22 21:39:47'
        ]);
        \App\Models\empu_model::create([
            'ekspedisi' => 'SN Cargo',
            'pj' => 'Henry',
            'komoditi' => 'Kepiting Hidup',
            'Koli' => '104',
            'tanggal' => '2021-05-22 21:39:47'
        ]);
        \App\Models\empu_model::create([
            'ekspedisi' => 'ATT',
            'pj' => 'Mas Boy',
            'komoditi' => 'Sparepart',
            'Koli' => '5',
            'tanggal' => '2021-05-22 21:39:47'
        ]);
        \App\Models\empu_model::create([
            'ekspedisi' => 'CDA',
            'pj' => 'Johny',
            'komoditi' => 'Garmen',
            'Koli' => '11',
            'tanggal' => '2021-05-22 21:39:47'
        ]);
        \App\Models\empu_model::create([
            'ekspedisi' => 'Pandu',
            'pj' => 'Dedi',
            'komoditi' => 'Dokumen Paket',
            'Koli' => '4',
            'tanggal' => '2021-05-22 21:39:47'
        ]);
    }
}
