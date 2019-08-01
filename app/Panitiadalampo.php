<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panitiadalampo extends Model
{
    protected $table = 'panitiadalampo';

    public function pegawai(){
        return $this->belongsTo(\App\Pegawai::class,'id_panitiadalam','id_pegawai');
    }
}
