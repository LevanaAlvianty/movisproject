<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kodeunit extends Model
{
    protected $table = 'jurbagnitpus';

    public function kegiatanpo() {
        return $this->hasMany('App\KegiatanPO');
    }
}
