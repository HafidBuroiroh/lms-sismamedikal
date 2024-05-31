<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;
    protected $table = 'jabatans';
    protected $guarded = [];

    public function sop(){
        return $this->BelongsToMany(SOP::class, 'jabatan_materis', 'id_jabatan', 'id_sop');
    }

    public function spm(){
        return $this->BelongsToMany(SPM::class, 'jabatan_materis', 'id_jabatan', 'id_spm');
    }

    public function course(){
        return $this->BelongsToMany(Course::class, 'jabatan_materis', 'id_jabatan', 'id_course');
    }

    public function materi(){
        return $this->BelongsToMany(MateriUmum::class, 'jabatan_materis', 'id_jabatan', 'id_mu');
    }
}
