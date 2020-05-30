<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SiswaModel;
use Faker\Generator as Faker;

$factory->define(SiswaModel::class, function (Faker $faker) {
    return [
        'nis' => '1718',
        'warga_sekolah_id' => rand(1, 10),
        'ortu_id' => rand(1, 10),
        // 'tanggal_masuk'=> date,
    ];
});
