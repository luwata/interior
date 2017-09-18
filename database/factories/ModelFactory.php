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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'username' => $faker->name,
        'password' => $password ?: $password = bcrypt('secret'),
        'email' => $faker->unique()->safeEmail,
        'role' => rand(1,3) == 1 ? 'customer' : ( rand(1,3) == 3 ? 'administrator' : 'editor'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Project::Class, function(Faker\Generator $faker){
	return [
		'user_id' => rand(1,5),
		'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
		'location' => $faker->address,
		'scheduled_at' => $faker->date(),
		'last_update' => $faker->datetime(),
		'type' => rand(1,2) == 1 ? 'progress' : 'archived',
	];
});

$factory->define(App\Post::Class, function(Faker\Generator $faker){
	return [
		'project_id' => rand(1,10),
		'description' => $faker->paragraph(rand(3,5)),
		'date_publication' => $faker->datetime(),
	];
});

$factory->define(App\Stock::Class, function(Faker\Generator $faker){
	return [
		'user_id' => rand(1,5),
		'references' => $faker->ean8,
		'designations' => $faker->domainWord,
		'quantity' => $faker->numberBetween($min = 1, $max = 99),
		'status' => rand(1,2) == 1 ? 'new' : 'used',
		'origin' => $faker->company,
	];
});

$factory->define(App\Contact::Class, function(Faker\Generator $faker){
	return [
		'phone' => $faker->phoneNumber,
		'email' => $faker->safeEmail,
	];
});
