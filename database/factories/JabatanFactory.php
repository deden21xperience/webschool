<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\JabatanModel::class, function (Faker $faker) {
    static $i;
    $jabatan = ['kepala sekolah', 'tu', 'guru', 'osis'];
    $i++;
    return [
        'jabatan' => $jabatan[$i - 1],
        'staff_id' => random_int(1, 3),
    ];
});
