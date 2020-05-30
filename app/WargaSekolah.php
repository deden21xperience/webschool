<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WargaSekolah extends Model
{
    protected $table = "warga_sekolah";
    protected $guarded = [];



    public function agama()
    {
        return $this->belongsTo(\App\Agama::class);
    }

    public function jobs()
    {
        return $this->belongsTo(\App\Job::class);
    }
}
