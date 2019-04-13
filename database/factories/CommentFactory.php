<?php
use Faker\Generator as Faker;
$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'contenu' => $faker->paragraph,
        'mail' => $faker->paragraph,
        'name' => $faker->paragraph,

    ];
});
