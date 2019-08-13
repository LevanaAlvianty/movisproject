<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnggaranPO extends Model
{
    protected $fillable = [
        'id_proposal',
        'id_barang',
        'jml1',
        'jml2',
        'jml3',
        'harga',
        'total',
    ];
    protected $table = 'anggaranpo';
    protected $primary = 'id';
    
    // public $timestamps = false;

    public function standartbiaya()
    {
        return $this->belongsTo(\App\StandartBiaya::class, 'id_barang', 'id_standartbiaya');
    }
}
