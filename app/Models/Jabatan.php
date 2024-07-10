<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;
    protected $table = 'jabatans';
    protected $guarded = [];

    public function user(){
        return $this->hasMany(ProfilUser::class, 'id_jabatan');
    }

    public function sops(){
        return $this->belongsToMany(SOP::class, 'jabatan_sops', 'id_jabatan', 'id_sop');
    }

    public function spms(){
        return $this->belongsToMany(SPM::class, 'jabatan_spms', 'id_jabatan', 'id_spm');
    }

    public function courses(){
        return $this->belongsToMany(Course::class, 'jabatan_courses', 'id_jabatan', 'id_course');
    }

    public function materiUmums(){
        return $this->belongsToMany(MateriUmum::class, 'jabatan_materi_umums', 'id_jabatan', 'id_mu');
    }
}
