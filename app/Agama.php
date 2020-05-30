<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Agama extends Model
{
    protected $table = 'agama';
    public function wargaSekolah()
    {
        return $this->hasMany(\App\wargaSekolah::class);
    }
}
