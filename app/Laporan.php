<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{   
    protected $fillable = [
        // 'id',
        'id_proposal',
        'id_kegiatan',
        'nip_pelaksana',
        'nama_pelaksana',
        'status',
        'judul',
        'tgltulis',
        'kodeunit',
        'thn_anggaran',

        'katapengantar',
        'latarbelakang1',
        'latarbelakang2',
        'latarbelakang3',
        'maksud_tujuan',
        'mekanisme_laporan',
        'pelaksanaan',
        'overview_peserta',
        'alasan_peserta',
        'peran_panitia',

        'overview_sumberdaya',
        'luaran_kegiatan',
        'overview_indikator',
        'rincian_indikator1',
        'permasalahan',
        'pemecahan',
        'kesimpulan',
        'rekomendasi',
        'foto_laporan',
        'surat_laporan',

        'materi_laporan',
        'berita_laporan',
        'luaran_laporan',
    ];
    protected $table = 'laporan';

    public function getStatusDisetujui()
    {
        if($this->status == '3')
        {
            return true;
        }
        return false;
    }

    public function getStatusIsNotSubmitted()
    {
        if ($this->status == '0') {
            return true;
        }

        return false;
    }

    public function getStatusIsSubmitted()
    {
        if ($this->status == '1') {
            return true;
        }

        return false;
    }

    public function getStatusRevisi()
    {
        if ($this->status == '2') {
            return true;
        }

        return false;
    }

    public function indikatorpos()
    {
        return $this->hasMany(\App\Indikatorpo::class, 'id_laporan', 'id');
    }

    public function kegiatanpo()
    {
        return $this->belongsTo(\App\KegiatanPO::class, 'kegiatan_id', 'id');
    }

    public function proposal()
    {
        return $this->belongsTo(\App\Proposal::class, 'id_proposal', 'id');
    }

    public function review()
    {
        return $this->hasOne(\App\Reviewlaporanpo::class, 'id_laporan', 'id');
    }

}
