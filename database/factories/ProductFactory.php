<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
		  'title' => $faker->company,
		  'description' => $faker->word(5),
		  'image' => 'https://picsum.photos/200/300',
		  'price' => $faker->randomDigit,
		  'category_id' => $faker->numberBetween(1,3),
    ];
});
