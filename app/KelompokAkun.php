<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KelompokAkun extends Model
{
    protected $table = 'kelompok';
    protected $primary = 'id_kelompok';
    public $timestamps = false;
    protected $fillable = [
        'id_kelompok','kelompok','id_akun'
    ];
}
