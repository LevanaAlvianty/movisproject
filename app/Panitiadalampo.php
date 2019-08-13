<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panitiadalampo extends Model
{
    protected $table = 'panitiadalampo';
    protected $fillable = [
        // 'id',
        'id_proposal',
        'id_panitiadalam',
        'nip',
        'peran',
    ];

    public function pegawai(){
        return $this->belongsTo(\App\Pegawai::class,'id_panitiadalam','id_pegawai');
    }
}
