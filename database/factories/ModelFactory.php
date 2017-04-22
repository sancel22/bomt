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
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Model\Remittance::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
    ];
});

$factory->define(App\Model\Recipient::class, function (Faker\Generator $faker) {
    return [
        'full_name' => $faker->name,
        'address' => $faker->address,
        'contact_number' => $faker->randomNumber(),

    ];
});

$factory->define(App\Model\Transaction::class, function (Faker\Generator $faker) {
    return [
        'user_id' => factory(App\User::class)->create()->id,
        'remittance_id' => $faker->randomElement([1, 2, 3, 4, 5, 6]),
        'recipient_id' => factory(App\Model\Recipient::class)->create()->id,
        'memo' => $faker->sentence,
    ];
});


$factory->define(App\Model\Credit::class, function (Faker\Generator $faker) {
    return [
        'user_id' => factory(App\User::class)->create()->id,
        'amount' => $faker->randomNumber(),
        'payment_code' => $faker->word,
    ];
});
