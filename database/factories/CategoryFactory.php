<?php

namespace Database\Factories;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use \App\Models\Category;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(\App\Models\Category::class, function (Faker $faker){
    return [
        'name' => $faker->name ,
        'description' => $faker ->sentence,
        'slug' => $faker-> slug,

    ];
});
