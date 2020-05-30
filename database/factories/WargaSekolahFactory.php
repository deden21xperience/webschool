<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\WargaSekolah;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

function cek($gender)
{
    switch ($gender) {
        case "male":
            return "L";
            break;
        case "female":
            return "P";
            break;
    }
}
$factory->define(WargaSekolah::class, function (Faker $faker) {
    // $agama = ["islam", "kristen", "budha", "hindu",];
    $genderIndonesia = ["L", "P"];
    $gender = "";
    switch ($genderIndonesia[random_int(0, 1)]) {
        case "L":
            $gender = "male";
            break;
        case "P":
            $gender = "female";
            break;
    }


    return [
        'nama' => $faker->name($gender),
        // 'email' => $faker->unique()->safeEmail,
        // 'email_verified_at' => now(),
        // 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        // 'remember_token' => Str::random(10),
        // 'user_id' => random_int(1, 10),
        'tgl_lahir' => $faker->date(),
        'jenis_kel' => cek($gender),
        'agama_id' => random_int(1, 5),
        'tlp' => $faker->phoneNumber,
        'hp' => $faker->phoneNumber,
        'posisi_user_id' => random_int(1, 3),
        'jobs_id' => random_int(1, 113)
        // 'can_login' => false
        // 'id_status_DetailInfo' => random_int(1, 5),

    ];
});
