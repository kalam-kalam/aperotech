<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'username' =>$faker->userName,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Apero::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->text,
        'content' => $faker->text,
        'abstract' => $faker->text,
        'status' => $faker->randomElement(array('published', 'unpublished')),
        'published_on' => $faker->dateTime->format('d,M,Y'),

    ];
});

