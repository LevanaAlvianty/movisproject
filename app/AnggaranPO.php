<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnggaranPO extends Model
{
    protected $table = 'anggaranpo';
    protected $primary = 'id';
    public $timestamps = false;

    public function standartbiaya()
    {
        return $this->belongsTo(\App\StandartBiaya::class, 'id_barang', 'id_standartbiaya');
    }
}
