<?php

use Illuminate\Database\Seeder;
use App\Dress;
use Faker\Generator as Faker;

class DressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        /*  $dresses = config('dresses');

        foreach ($dresses as $dress) {
            $new_dress = new Dress();
            $new_dress->name = $dress['name'];
            $new_dress->size = $dress['size'];
            $new_dress->color = $dress['color'];
            $new_dress->quantity = $dress['quantity'];
            $new_dress->price = $dress['price'];
            $new_dress->description = $dress['description'];
            $new_dress->save();
        } */

        for($i = 0; $i < 30; $i++) {
            $new_dress = new Dress();
            $new_dress->name = $faker->randomElement(['Pantalone', 'Maglietta', 'Camicia', 'Giacca', 'Scarpe', 'Cappotto']);
            $new_dress->size = $faker->randomElement(['XXS', 'XS', 'S', 'M', 'L', 'XL', 'XXL']);
            $new_dress->color = $faker->safeColorName();
            $new_dress->quantity = $faker->randomDigitNotNull();
            $new_dress->price = $faker->randomFloat(2, 15, 200);
            $new_dress->description = $faker->sentence(3);
            $new_dress->save();
        }
    }
}
