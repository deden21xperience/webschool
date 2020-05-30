<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

// use App\StatusUserModel;
use Faker\Generator as Faker;

$factory->define(\App\JurusanModels::class, function (Faker $faker) {
    static $i;
    $status = ['TSM', 'TKJ', 'TKR', 'AK', 'AP'];
    $i++;
    return [
        'jurusan' => $status[$i - 1]
    ];
});
