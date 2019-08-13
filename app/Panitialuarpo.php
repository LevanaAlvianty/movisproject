<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panitialuarpo extends Model
{
    protected $fillable = [
        'id_proposal',
        'nama',
        'nip',
        'npwp',
        'cv',
    ];

    protected $table = 'panitialuarpo';
}
