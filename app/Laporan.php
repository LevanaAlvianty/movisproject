<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'laporan';
    protected $primary = 'id';
    public $timestamps = false;

    public function kegiatanpo()
    {
        return $this->belongsTo(\App\KegiatanPO::class, 'kegiatan_id', 'id');
    }

    public function proposal()
    {
        return $this->belongsTo(\App\Proposal::class, 'id_proposal', 'id');
    }

}
