<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesertapo extends Model
{
    protected $table = 'pesertapo';
    protected $fillable = [
        // 'id',
        'id_proposal',
        'id_peserta',
        'nip',
        'peran',
        'golongan',
        'jabatan',
    ];

    public function pegawai()
    {
        return $this->belongsTo(\App\Pegawai::class, 'id_peserta', 'id_pegawai');
    }
}
