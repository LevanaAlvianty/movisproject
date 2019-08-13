<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KegiatanPO extends Model
{
    protected $table ='kegiatanpo';
    protected $guarded = [];

    // protected $fillable = [
    //     'nama_kegiatan', 'id_jurbagnitpus','pimpinan','nip_pic','reviewer_spi','reviewer_ang'
    // ];

    public function jurbagnitpus() {
        return $this->belongsTo(\App\Kodeunit::class, 'id_jurbagnitpus', 'kode');
    }

    public function pegawai() {
        return $this->belongsTo(\App\Pegawai::class,'nip_pic','nip');
    }

    public function proposal()
    {
        return $this->hasOne(\App\Proposal::class, 'id_kegiatan', 'id');
    }

    public function laporan()
    {
        return $this->hasOne(\App\Laporan::class, 'id_kegiatan', 'id');
    }
}
