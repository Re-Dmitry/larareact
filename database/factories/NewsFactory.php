<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\News;
use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {
    return [
		'title' => $faker->word(5),
		'description' => $faker->text(30),
    ];
});
