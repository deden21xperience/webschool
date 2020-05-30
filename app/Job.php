<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

    // protected $table = 'pekerjaan_models';


    public function wargaSekolah()
    {
        return $this->hasMany(\App\WargaSekolah::class);
    }
}
