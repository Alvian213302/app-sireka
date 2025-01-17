<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(kritiksaran_seeder::class);
        $this->call(cin_seeder::class);
        $this->call(empu_seeder::class);
        $this->call(user_seeder::class);
    }
}
