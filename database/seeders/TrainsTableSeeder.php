<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TrainsTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $faker = Faker::create('it_IT');

        for ($i = 0; $i < 15; $i++) {
            $newTrain = new Train(); // Istanza del model
            $newTrain->company = $faker->randomElement(['Italo','Trenitalia']);
            $newTrain->departure = $faker->city();
            $newTrain->arrival = $faker->city();
            $newTrain->time_departure = $faker->time();
            $newTrain->time_arrival = $faker->time();
            $newTrain->code = $faker->regexify('[A-Z0-9]{5}');
            $newTrain->cabin_numbers = $faker->randomDigitNotNull();
            $newTrain->in_time = $faker->boolean();
            $newTrain->cancelled = $faker->boolean();
            $newTrain->date = $faker->dateTimeInInterval('today', '+5 days');
            // dd($newTrain); // Stamperà un model di house
            
            $newTrain->save(); // Per salvare i dati e aggiungerli al database
        }
    }
}
