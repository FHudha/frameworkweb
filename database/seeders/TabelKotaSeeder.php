<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TabelKotaSeeder extends Seeder
{
    public function run()
    {
        DB::table('kota')->insert([
            ['id_provinsi'=>1,'nama_kota' => 'Kodya Yogyakarta'],
            ['id_provinsi'=>1,'nama_kota' => 'Bantul'],
            ['id_provinsi'=>1,'nama_kota' => 'Sleman'],
            ['id_provinsi'=>1,'nama_kota' => 'Kulon Progo'],
            ['id_provinsi'=>1,'nama_kota' => 'Gunung Kidul'],
            ['id_provinsi'=>2,'nama_kota' => 'Magelang'],
            ['id_provinsi'=>2,'nama_kota' => 'Klaten'],
            ['id_provinsi'=>3,'nama_kota' => 'Malang'],
            ['id_provinsi'=>3,'nama_kota' => 'Mojokerto']
        ]);
    }
}
