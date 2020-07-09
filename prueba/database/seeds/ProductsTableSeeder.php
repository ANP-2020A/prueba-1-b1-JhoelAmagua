<?php

use App\Products;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla.
        Products::truncate();

        $faker = \Faker\Factory::create();

        // Crear productos ficticios en la tabla

        for($i = 0; $i < 50; $i++) {
            Products::create([
                'id'=> $faker->numberBetween(1,20),
                'name'=> $faker->name,
                'code'=> $faker->sentence,
                'price'=> $faker->numberBetween(1,123456),
                'status'=> $faker->randomElement(['active','deleted']),
                ]);
        }
    }
}
