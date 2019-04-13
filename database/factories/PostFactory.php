<?php
use Faker\Generator as Faker;
use App\Post;
$factory->define(Post::class, function (Faker $faker) {
    return [
        'titre' => $faker->sentence,
        'contenu' => $faker->paragraph,
        /*'user_id'=> function () {
            return factory('App\User')->create()->id;
        },*/
    ];
});