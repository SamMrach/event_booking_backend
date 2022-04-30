<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Utilisateur;
class UtilisateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Utilisateur::truncate();
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 6; $i++) {
            Utilisateur::create([
                'name' => $faker->name,
                'adress' => $faker->sentence,
                'email'=>$faker->email,
                'telephone'=>$faker->randomDigit,
                'password'=>$faker->numerify('#####'),
                'photo'=>$faker->image('public/storage/images',640,480,null,false),
                
            ]);
        }
    }
}