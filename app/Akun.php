<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    protected $table = 'akun';
    // protected $primary = 'id_akun';
    public $timestamps = false;
    protected $fillable = [
        'akun','nama_akun','ket_akun'
    ];
}
