<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kodeunit extends Model
{
    protected $table = 'jurbagnitpus';
    protected $fillable = [
        'id_jurbagnitpus','jurbagnitpus','kode','warna'
    ];

    public function kegiatanpo() {
        return $this->hasMany('App\KegiatanPO');
    }
}
