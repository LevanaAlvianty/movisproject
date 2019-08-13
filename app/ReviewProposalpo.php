<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReviewProposalpo extends Model
{
    protected $fillable = [
        // 'id',
        'id_proposal',
        'r_sampul',
        'r_pengesahan',
        'r_latar1',
        'r_latar2',
        'r_latar3',
        'r_tujuan',
        'r_mekanisme',
        'r_panitiadalam',

        'r_panitialuar',
        'r_peserta',
        'r_luaran',
        'r_jadwal',
        'r_anggaran',
        'r_penutup',
        'status',
        'status_proposal',
        'status_anggaran',
    ];

    protected $table = 'reviewproposalpo';

    public function getStatusAnggaranTidakDisetujui()
    {
        if ($this->status_anggaran == '2') {
            return true;
        }

        return false;
    }

    public function getStatusProposalTidakDisetujui()
    {
        if ($this->status_proposal == '2') {
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

    public function proposal()
    {
        return $this->belongsTo(\App\Proposal::class, 'id_proposal', 'id');
    }
}
