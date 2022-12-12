<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

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
        for($i=1 ;$i<=2 ;$i++)[
            DB::table('siswa')->insert([
                'nama'=>$faker->name,
                'nisn'=>$faker->randomNumber(5,true),
                'kelas_id'=>$faker->randomElement(['1','2','3','4']),
                'jurusan'=>$faker->randomElement(['PPLG','ANIMASI','BC']),
                'jenis_kelamin'=>$faker->randomElement(['Laki-Laki','Prempuan']),
                'alamat'=>$faker->address,
                'no_telepon'=>$faker->phoneNumber,
                'email'=>$faker->safeEmail,
                'password'=>$faker->randomNumber(5,true),
                'point'=> 0
            ])
        ];
        
    }
}
