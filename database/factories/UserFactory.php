<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
    $gender= ['Male','Female'];

    return [
        'UserName' => $faker->name,
        'Email' => $faker->unique()->safeEmail,
        'ConfirmEmail' => $faker->unique()->safeEmail,
        'Country'=> $faker->name,
        'Gender'=> $gender[rand(0,1)],
        'DOB_day'=> rand(1,30),
        'DOB_month'=>  rand(1,12),
        'DOB_year'=>  rand(1970,2002),
        'RegistrationReason'=> 'for got Married',
        'HearAboutUs'=> 'Google',
        'Accept'=> rand(0,1),
        'email_verified_at' => now(),
        'password' => Hash::make(12345678), //password
        'remember_token' => Str::random(10),
    ];
});








