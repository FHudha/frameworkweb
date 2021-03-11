<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TabelJurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jurusan')->insert([
            ['nama_jurusan'=>'Teknik Informatika', 'jumlah_sks'=> '144', 'jenjang'=> 'S1'],
            ['nama_jurusan'=>'Sistem Informasi', 'jumlah_sks'=> '144', 'jenjang'=> 'S1'],
            ['nama_jurusan'=>'Teknik Komputer', 'jumlah_sks'=> '120', 'jenjang'=> 'S3'],
            ['nama_jurusan'=>'Teknik Industri', 'jumlah_sks'=> '144', 'jenjang'=> 'S1'],
            ['nama_jurusan'=>'Akuntansi', 'jumlah_sks'=> '144', 'jenjang'=> 'S1']
        ]);
    }
}
