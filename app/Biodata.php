<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Rencana 
// Membuat Model dinamis terhadap database yang diinputkan
class Biodata extends Model
{
    protected $connection = "mysql2";
    protected $guard = [];
    public static $namaTable;
    public function __construct()
    {
        $this->table = self::$namaTable;
    }
}
