<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviewlaporanpo extends Model
{
    protected $fillable = [
        // 'id',
        'id_laporan',
        'r_sampul',
        'r_pengesahan',
        'r_katapengantar',
        'r_daftarisi',
        'r_daftarlampiran',
        'r_latar1',
        'r_latar2',
        'r_latar3',
        'r_maksudtujuan',
        'r_mekanisme',
        'r_pelaksanaan',

        'r_datapeserta',
        'r_sumberdaya',
        'r_luaran',
        'r_indikator',
        'r_permasalahan',
        'r_pemecahan',
        'r_kesimpulan',
        'r_rekomendasi',
        'r_lampiran',
        'status',
        'status_laporan',
    ];

    protected $table = 'reviewlaporanpo';

    public function getStatusTidakDisetujui()
    {
        if ($this->status_laporan == '2') {
            return true;
        }

        return false;
    }

    public function getStatusReviewIsNotComplete()
    {
        if ($this->status == '0') {
            return true;
        }

        return false;
    }

    public function getStatusReviewIsComplete()
    {
        if ($this->status == '1') {
            return true;
        }

        return false;
    }
    public function laporan()
    {
        return $this->belongsTo(\App\Laporan::class, 'id_laporan', 'id');
    }
}
