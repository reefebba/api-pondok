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

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    
    	$hasher = app()->make('hash');

    return [
    	'uuid'	=> $faker->domainName,	
        'username' => $faker->userName,
        'email' => $faker->email,
        'password' => $hasher->make('secret')
    ];
});
