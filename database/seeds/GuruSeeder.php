<?php

use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('guru')->insert([
            'nama' => 'Nam Do San',
            'telepon' => '087767767676',
            'alamat' => 'Korsel',
        ]);

        \DB::table('guru')->insert([
            'nama' => 'Naruto',
            'telepon' => '081180081180',
            'alamat' => 'Jepang',
        ]);

        \DB::table('guru')->insert([
            'nama' => 'Abdullah',
            'telepon' => '080080080080',
            'alamat' => 'Arab',
        ]);

        \DB::table('guru')->insert([
            'nama' => 'Newton',
            'telepon' => '089098890980',
            'alamat' => 'Inggris',
        ]);
    }
}
