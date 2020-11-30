<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('mapel')->insert([
            'kode' => 'MTK',
            'nama' => 'Matematika',
            'semester' => 'Ganjil',
            'guru_id' => 1
        ]);

        \DB::table('mapel')->insert([
            'kode' => 'IND',
            'nama' => 'Bahasa Indonesia',
            'semester' => 'Ganjil',
            'guru_id' => 2
        ]);

        \DB::table('mapel')->insert([
            'kode' => 'PAI',
            'nama' => 'Pendidikan Agama Islam',
            'semester' => 'Ganjil',
            'guru_id' => 3
        ]);

        \DB::table('mapel')->insert([
            'kode' => 'IPA',
            'nama' => 'Ilmu Pengetahuan Alam',
            'semester' => 'Ganjil',
            'guru_id' => 4
        ]);
    }
}
