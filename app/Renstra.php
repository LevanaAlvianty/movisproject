<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Renstra extends Model
{
    protected $table = 'renstra';
    protected $primary = 'id_renstra';
    public $timestamps = false;
    protected $fillable = [
        'id_renstra','renstra', 'tahun_penetapan','status'
    ];
    public function programs() {
        return $this->hasMany('App\ProgramUtama','id_renstra');
    }
}
