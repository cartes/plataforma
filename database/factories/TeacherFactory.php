<?php

use Faker\Generator as Faker;

$factory->define(App\Teacher::class, function (Faker $faker) {
    $name = $faker->name;
    $last_name = $faker->lastName;

    return [
        'user_id' => null,
        'title' => $faker->jobTitle,
        'biography' => $faker->paragraph,
        'website_url' => $faker->url,
    ];
});
