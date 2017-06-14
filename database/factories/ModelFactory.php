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

use Illuminate\Support\Facades\Hash;

$factory->define(App\Models\Api\Account::class, function (Faker\Generator $faker) {
    return [
        'phone' => rand(13000000000, 18899999999),
        'email' => $faker->safeEmail,
        'open_id' => str_random(15),
        'register_way' => rand(0, 4),
        'password' => Hash::make(str_random(10)),
        'token' => str_random(15),
        'nickname' => $faker->name,
        'avatar' => $faker->imageUrl(200, 200)
    ];
});
