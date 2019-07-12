<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pejabat extends Model
{
    protected $table = 'pejabats';
    protected $primary = 'id';
    public $timestamps = false;
    protected $fillable = [
        'id','name', 'nip','jabatan'
    ];
}
