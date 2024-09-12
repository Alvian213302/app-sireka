<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'admin',
            'email' => 'admin@aplog.co',
            'password' => bcrypt('admin123'),
            'nomor_telepon' => '082356776545',
            'role' => 'admin',
            'remember_token' => Str::random(60)
        ]);
        \App\Models\User::create([
            'name' => 'SN',
            'email' => 'suryagita@gmail.com',
            'password' => bcrypt('suryagita123'),
            'role' => 'user',
            'nomor_telepon' => '082376545555',
            'remember_token' => Str::random(60)
        ]);
        \App\Models\User::create([
            'name' => 'DBM',
            'email' => 'bandarmandala@gmail.com',
            'password' => bcrypt('bandarmandala123'),
            'role' => 'user',
            'nomor_telepon' => '082489576844',
            'remember_token' => Str::random(60)
        ]);
        \App\Models\User::create([
            'name' => 'APLOG',
            'email' => 'angkasapuralog@gmail.com',
            'password' => bcrypt('angkasapuralog123'),
            'role' => 'user',
            'nomor_telepon' => '082276440989',
            'remember_token' => Str::random(60)
        ]);
    }
}
