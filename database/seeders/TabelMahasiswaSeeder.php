<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TabelMahasiswaSeeder extends Seeder
{
    public function run()
    {
        DB::table('mahasiswa')->insert([
            ['id_jurusan'=>1,'nim' => '12341', 'nama'=> 'Fahrul', 'alamat'=> 'Sleman', 'jenis_kel'=> 'pria', 'tgl_lahir'=> '19 Januari 1998', 'agama'=> 'islam'],
            ['id_jurusan'=>2,'nim' => '12342', 'nama'=> 'Hudha', 'alamat'=> 'Yogya', 'jenis_kel'=> 'pria', 'tgl_lahir'=> '19 Januari 1998', 'agama'=> 'islam'],
            ['id_jurusan'=>3,'nim' => '12343', 'nama'=> 'Setiawan', 'alamat'=> 'Sleman', 'jenis_kel'=> 'pria', 'tgl_lahir'=> '19 Januari 1998', 'agama'=> 'islam'],
            ['id_jurusan'=>4,'nim' => '12344', 'nama'=> 'Yulis', 'alamat'=> 'Sleman', 'jenis_kel'=> 'wanita', 'tgl_lahir'=> '19 Januari 1998', 'agama'=> 'islam'],
            ['id_jurusan'=>5,'nim' => '12345', 'nama'=> 'Kris', 'alamat'=> 'Sleman', 'jenis_kel'=> 'wanita', 'tgl_lahir'=> '19 Januari 1998', 'agama'=> 'islam']
        ]);
    }
}
