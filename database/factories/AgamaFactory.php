<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Agama;
use Faker\Generator as Faker;

$factory->define(Agama::class, function (Faker $faker) {
    static $i;

    $agama = ['islam', 'kristen', 'katholik', 'budha', 'hindu', 'konghucu'];
    $i++;
    return [
        'agama' => $agama[$i - 1]
    ];
});
