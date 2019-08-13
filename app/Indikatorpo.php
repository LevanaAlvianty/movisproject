<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indikatorpo extends Model
{
    protected $fillable = [
        // 'id',
        'id_laporan',
        'indikator',
        'baseline',
        'target',
    ];

    protected $table = 'indikatorpo';
}
