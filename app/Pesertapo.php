<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesertapo extends Model
{
    protected $table = 'pesertapo';
    public function pegawai()
    {
        return $this->belongsTo(\App\Pegawai::class, 'id_peserta', 'id_pegawai');
    }
}
