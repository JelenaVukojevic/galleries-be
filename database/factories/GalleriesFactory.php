<?php

use Faker\Generator as Faker;

$factory->define(App\Gallery::class, function (Faker $faker) {
    return [
        'title' => 'Gallery title',
        'description' => 'Lorem Ipsum is simply dummy text of the 
            printing and typesetting industry. Lorem Ipsum has been the industrys
            standard dummy text ever since the 1500s',
        'author_id' => function () {
            return factory(App\User::class)->create()->id;
        }
    ];
});
