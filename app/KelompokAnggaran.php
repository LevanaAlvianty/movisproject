<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KelompokAnggaran extends Model
{
    protected $table = 'kelompokanggaran';
    protected $primary = 'id_kelang';
    public $timestamps = false;
    protected $fillable = [
        'id_kelang','kelompokanggaran'
    ];
}
