<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StandartBiaya extends Model
{
    protected $table = 'standartbiaya';

    public function satuan()
    {
        return $this->belongsTo(\App\Satuan::class, 'id_satuan', 'id_satuan');
    }
}
