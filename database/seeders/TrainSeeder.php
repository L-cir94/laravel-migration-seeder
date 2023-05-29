<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->company = $faker->randomElement(['Italo', 'Trenitalia', 'TGV']);
            $train->departure_station = $faker->randomElement(['Milano', 'Bari', 'Roma']);
            $train->arrival_station = $faker->randomElement(['Milano', 'Bari', 'Roma']);
            $train->time_departure = $faker->time('H:i:s');
            $train->time_arrival = $faker->time('H:i:s');
            $train->train_code = ($faker->randomNumber(5));
            $train->save();
        }
    }
}
