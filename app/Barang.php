<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'standartbiaya';
    protected $primary = 'id_standartbiaya';
    public $timestamps = false;
    // protected $fillable = [
    //     'id_standartbiaya','namabarang','hargasatuan','acuan','id_akun','id_kelompok','id_satuan'
    // ];
}
