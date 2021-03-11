<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TabelProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinsi')->insert([
            ['provinsi'=>'D.I Yogyakarta'],
            ['provinsi'=>'Jawa Tengah'],
            ['provinsi'=>'Jawa Timur']
        ]);
    }
}
