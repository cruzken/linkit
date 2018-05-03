<?php

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->userName,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function (Faker $faker) {
    $linkOrBody = (rand(0,1) == 1) ? ['key' => 'url', 'value' => $faker->url] :
                                     ['key' => 'body', 'value' => $faker->paragraph];

    return [
        'user_id' => App\User::all()->random()->id,
        'title' => $faker->sentence,
        $linkOrBody['key'] => $linkOrBody['value'],
        'created_at' => $faker->dateTimeThisMonth,
    ];
});

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'user_id' => App\User::all()->random()->id,
        'post_id' => App\Post::all()->random()->id,
        'body' => $faker->sentence,
        'created_at' => $faker->dateTimeThisMonth,
    ];
});