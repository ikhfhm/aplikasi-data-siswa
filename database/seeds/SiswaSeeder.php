<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        
        for($i = 1; $i <= 100; $i++){
            \DB::table('siswa')->insert([
                'user_id' => 1,
                'nama_depan' => $faker->firstName,
                'nama_belakang' => $faker->lastName,
                'jenis_kelamin' => $faker->randomElement(['L','P']),
                'agama' => $faker->randomElement(['Islam','Kriten', 'Katolik', 'Hindu', 'Budha']),
                'alamat' => $faker->address,
            ]);
        }
    }
}
