<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Product;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Product::class, function (Faker $faker) {
  return [
		'name' => $faker->colorName,
		'description' => $faker->paragraph(3, true),
		'price' => $faker->randomFloat(2, 100, 999999),
  ];
});
