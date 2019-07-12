<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Satuan extends Model
{
    protected $table = 'satuan';
    // protected $primary = 'id_satuan';
    public $timestamps = false;
    protected $fillable = [
        'satuan'
    ];
}
