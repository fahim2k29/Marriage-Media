<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Education;
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
    // $gender= ['Male','Female'];
    $gender = $faker->randomElement($array = array('male','female'));

    $mail = $faker->unique()->safeEmail;

    return [
        'UserName'          => $faker->userName($gender),
        'Email'             => 'fahim@gmail.com',
        'ConfirmEmail'      => 'fahim@gmail.com',
        'Country'           => $faker->country,
        'Gender'            => $gender,
        'DOB_day'           => rand(1,30),
        'DOB_month'         => rand(1,12),
        'DOB_year'          => rand(1970,2002),
        'RegistrationReason'=> 'for got Married',
        'HearAboutUs'       => 'Google',
        'Accept'            => rand(0,1),
        'email_verified_at' => now(),
        'password'          => Hash::make(12345678), //password
        'remember_token'    => Str::random(10),
        ];
});

// $factory->define(Education::class, function (Faker $faker) {
//     $Elevel =   ['Bachelors degree','College','Doctorate','High school','Masters degree','Non degree qualification','Prefer not to say','Other degree','Other', 'Other'];
//     $lang   =   ['English','Arabic','Balochi','Bengali','Chinese','Dutch','French','German','Greek','Gujerati','Hebrew','Hindi','Hindko','Italian','Japanese','Kurdish','Kutchi','Latin','Mirpuri','Persian','Portugese','Potwari','Punjabi','Pushto','Russian','Spanish','Sylheti','Tamil', 'Other'];
//     $emp    =   ['Accountant','Acting Professional','Actor','Administration','Administration Professional','Advertising Professional','Air Hostess','Architect','Writer','Zoologist'];
//     $job    =   ['Marketing Coordinator','Medical Assistant','Web Designer','Dog Trainer','President of Sales','Nursing Assistant','Project Manager','Librarian','Project Manager','Account Executive','Other'];
//     $sub    =   ['Bangla', 'English', 'Engineering', 'Sociology', 'Islamic Study', 'Accounting', 'Management', 'Zoology', 'Botany', 'Computer Application', 'Mathematics', 'Business', 'Other'];
//     return [
//         'EducationLevel'    => $Elevel  [rand(0,9)],
//         'SubjectStudied'    => $sub     [rand(0,12)],
//         'JobTitle'          => $job     [rand(0,10)],
//         'Employment'        => $emp     [rand(0,9)],
//         'FirstLang'         => $lang    [rand(0,28)],
//         'SecondLang'        => $lang    [rand(0,28)],
//     ];
// });






