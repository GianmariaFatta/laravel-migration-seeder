<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
USE Faker\Generator as faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(faker $faker): void
    {

        for($i=0; $i<10; $i++){
            $new_train = new Train();
            $new_train->company=$faker->company();
            $new_train->departure_station=$faker->city();
            $new_train->arrival_station=$faker->city();
            $new_train->departure=$faker->time();
            $new_train->arrival=$faker->time();
            $new_train->train_code=$faker->bothify('??##-??######');
            $new_train->train_carriages=$faker->numberBetween(1, 99);
            $new_train->is_intime=$faker->numberBetween(0,1);
            $new_train->is_cancelled=$faker->numberBetween(0,1);

            $new_train->save();
        }
    }
}
