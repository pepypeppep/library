<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
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

$factory->define(User::class, function (Faker $faker) {
	return [
        'username' 		=> 'atma_user'.$faker->unique()->randomNumber(1),
        'password' 		=> bcrypt('qwerty123'),
        'fullname'		=> $faker->name,
        'created_at'	=> now(),
        'active'		=> $faker->randomElement(['1' ,'0']),
    ];
});
