<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indikator extends Model
{
    protected $table = 'dirkegiatan';
    protected $primary = 'id_dirkegiatan';
    public $timestamps = false;
    
}
