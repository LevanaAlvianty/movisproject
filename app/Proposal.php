<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    protected $fillable = [
        // 'id',
        'id_kegiatan',
        'kodeunit',
        'nip_pelaksana',
        'id_kelang',
        'id_dirprogram',
        'status',
        'judul',
        'namapelaksana',
        'jk',

        'jab_struktural',
        'jab_fungsional',
        'unit_pelaksana',
        'mak',
        'thn_anggaran',
        'pagu',
        'tglmulai',
        'tglselesai',
        'tgltulis',
        'tempat',

        'target_luaran',
        'dampak',
        'jab_unitpelaksana',
        'nama_unitpelaksana',
        'nip_unitpelaksana',
        'nama_direktur',
        'nip_direktur',
        'jab_wadir1',
        'nama_wadir1',
        'nip_wadir1',

        'jab_wadir2',
        'nama_wadir2',
        'nip_wadir2',
        'latarbelakang1',
        'latarbelakang2',
        'latarbelakang3',
        'luaran_prop',
        'mekanisme_prop',
        'tujuan_prop',
        'penutup_prop',
    ];

    protected $table = 'proposal';
    protected $primary = 'id';
    // public $timestamps = false;

    public function anggaranpos()
    {
        return $this->hasMany(\App\AnggaranPO::class, 'id_proposal', 'id');
    }

    public function dirprogutama()
    {
        return $this->belongsTo(\App\ProgramUtama::class, 'id_dirprogram', 'id_dirprogutama');
    }

    /**
     * @return float $anggaranTotal
     */
    public function getAnggaranTotal()
    {
        $anggaranTotal = 0;

        if ($anggaranpos = $this->anggaranpos) {
            foreach ($anggaranpos as $anggaran) {
                $anggaranTotal += $anggaran->total;
            }
        }

        return $anggaranTotal;
    }

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

    public function jadwalpos()
    {
        return $this->hasMany(\App\Jadwalpo::class, 'id_proposal', 'id');    
    }

    public function kelang()
    {
        return $this->belongsTo(\App\KelompokAnggaran::class, 'id_kelang', 'id_kelang');
    }

    public function kegiatanpo()
    {
        return $this->belongsTo(\App\KegiatanPO::class, 'id_kegiatan', 'id');
    }

    public function laporan()
    {
        return $this->hasOne(\App\Laporan::class, 'id_proposal', 'id');
    }

    public function panitiadalampos()
    {
        return $this->hasMany(\App\Panitiadalampo::class, 'id_proposal', 'id');    
    }

    public function panitialuarpos()
    {
        return $this->hasMany(\App\Panitialuarpo::class, 'id_proposal', 'id');
    }

    public function panitialuarposWhereIsNotEmpty()
    {
        return $this->hasMany(\App\Panitialuarpo::class, 'id_proposal', 'id')
            ->whereNull('nama')
            -> whereNull('nip')
            ->whereNull('npwp')
            ->whereNull('cv');
    }

    public function pegawai()
    {
        return $this->belongsTo(\App\Pegawai::class, 'nip_pelaksana', 'nip');
    }

    public function pesertaPos()
    {
        return $this->hasMany(\App\PesertaPo::class, 'id_proposal', 'id');
    }

    public function review()
    {
        return $this->hasOne(\App\ReviewProposalpo::class, 'id_proposal', 'id');
    }
}
