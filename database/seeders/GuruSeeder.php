<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('guru')->insert([
        //     'nama_guru'=> 'rand',
        //     'nip' => rand(0,5),
        //     'mata_pelajaran' => 'pai'
        // ]);
        $faker = Faker::create('id_ID');
        for ($i=1;$i<5 ; $i++){
             DB::table('guru')->insert([
            'nama_guru'=>$faker->name,
            'nip' => $faker->randomNumber(5, true),
            'mata_pelajaran' => $faker->address
        ]);
        }
        

    }
    
}
