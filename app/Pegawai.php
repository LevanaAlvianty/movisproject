<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

// use Illuminate\Database\Eloquent\Model;
//use Illuminate\Foundation\Auth\User as Model;

class Pegawai extends Authenticatable
{
    use Notifiable;
    
    protected $table ='pegawai';

    protected $primaryKey = 'id_pegawai';

    protected $fillable = [
        'nip', 'nama', 'password'
    ];

    protected $hidden = [
        'password','remember_token'
    ];

     /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function roles() {
        return $this->belongsToMany('App\Role','pegawai_role','pegawai_id','role_id');
    }

    public function hasAnyRole($roles) {
        if(is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                    return $true;
                }
            }
        } else {
            if ($this->hasRole($roles)) {
                return $true;
            }
        }
        return false;
    }

    public function hasRole($role) {
        if($this->roles()->where('name',$role)->first()) {
            return true;
        }
        return false;
    }

    public function isAdmin() {
        if($this->roles()->where('name','admin')->first()) {
            return true;
        }
        return false;
    }

    public function isPic(){
        if ($this->roles()->where('name', 'pic')->first()) {
            return true;
        }
        return false;
    }

    public function isPimpinan(){
        if ($this->roles()->where('name', 'pimpinan')->first()) {
            return true;
        }
        return false;
    }

    public function isReviewerspi(){
        if ($this->roles()->where('name', 'reviewer_spi')->first()) {
            return true;
        }
        return false;
    }

    public function isReviewerang(){
        if ($this->roles()->where('name', 'reviewer_ang')->first()) {
            return true;
        }
        return false;
    }
}
