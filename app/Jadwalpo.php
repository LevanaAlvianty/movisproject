<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwalpo extends Model
{
    protected $table = 'jadwalpo';
    protected $fillable = [
        'id_proposal',
        'kegiatan',
        'stat_jan',
        'stat_feb',
        'stat_mar',
        'stat_april',
        'stat_mei',
        'stat_jun',
        'stat_jul',
        'stat_agust',
        'stat_sept',
        'stat_okt',
        'stat_nov',
        'stat_des',
    ];
}
