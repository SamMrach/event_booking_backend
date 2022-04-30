<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ticket;
class CommandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        for($i=0;$i<6;$i++){
        $faker = \Faker\Factory::create();
        ticket::create([
          'code'=>$faker->bothify('#?#?#?'),
          'utilisateur_id'=>3,
          'event_id'=>2,
        ]);
     }
    }
}