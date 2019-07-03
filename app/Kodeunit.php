<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kodeunit extends Model
{
    protected $table = 'jurbagnitpus';
    protected $fillable = [
        'jurbagnitpus','kode','warna'
    ];

    public function kegiatanpo() {
        return $this->hasMany('App\KegiatanPO');
    }
}
