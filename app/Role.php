<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = [
        'id', 'name', 'desc'
    ];

    protected $primaryKey = 'id';
   
    public function pegawai() {
    	return $this->belongsToMany('App\Pegawai','pegawai_role', 'role_id', 'pegawai_id');
    }
}
