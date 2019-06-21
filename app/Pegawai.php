<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table ='pegawai';
    public function roles(){
        return $this->belongsToMany('App\Pegawai','userkegiatan','nip','role_id');
    }
}
