<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(\App\User::class, 10)->create();
        factory(\App\Agama::class, 6)->create();
        // factory(\App\PosisiUser::class, 3)->create();
        factory(\App\WargaSekolah::class, 10)->create();
        // factory(\App\JabatanModel::class, 4)->create();
        factory(\App\Job::class, 113)->create();
        // factory(\App\JurusanModels::class, 5)->create();
    }
}
