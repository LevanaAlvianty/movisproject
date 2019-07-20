<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramUtama extends Model
{
    protected $table = 'dirprogutama';
    protected $primary = 'id_dirprogutama';
    public $timestamps = false;
    protected $fillable = [
        'id_dirprogutama','dirprogutama', 'id_renstra','tahun_penetapan','status'
    ];
    public function renstra() {
        return $this->belongsTo('App\Renstra','id_renstra');
    }
}
