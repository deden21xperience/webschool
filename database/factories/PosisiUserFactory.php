<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

// use App\StatusUserModel;
use Faker\Generator as Faker;

$factory->define(\App\PosisiUser::class, function (Faker $faker) {
    static $i;
    $status = ['staff', 'ortu', 'siswa'];
    $i++;
    return [
        'posisi_user' => $status[$i - 1]
    ];
});
