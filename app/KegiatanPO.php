<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KegiatanPO extends Model
{
    protected $table ='kegiatanpo';
    protected $guarded = [];

    protected $fillable = [
        'nama_kegiatan', 'id_jurbagnitpus','pimpinan','nip_pic','reviewer_spi','reviewer_ang'
    ];

    public function kodeunit() {
        return $this->belongsTo('App\Kodeunit');
    }

    public function pegawai() {
        return $this->belongsto('App\Pegawai','id_pegawai');
    }

}
