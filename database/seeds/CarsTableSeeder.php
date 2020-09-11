<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Car;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 10; $i++) {
        $new_car = new Car();
        $new_car->manifacturer = $faker->randomElement(['Ford' , 'Bmw', 'Fiat', 'Audi', 'Alfa Romeo', 'Autobianchi', 'Ferrari']);
        $new_car->model = $faker->randomElement(['Fiesta' , 'I3', 'Punto', 'Quattro', '8C', 'A112', 'FXX']);
        $new_car->imgurl = $faker->imageUrl;
        $new_car->year = $faker->year;
        $new_car->engine = $faker->randomElement(['1200', 'v6', 'v8', 'v12']);
        $new_car->plate = $faker->word;
        $new_car->user_id = rand(1,5);
        $new_car->save();

        $new_car->tags()->attach(rand(1,4));
      }
    }
}
