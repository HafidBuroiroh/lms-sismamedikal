<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MateriUmum extends Model
{
    use HasFactory;
    protected $table = 'materi_umums';
    protected $guarded = [];

    // public function jabatan(){
    //     return $this->BelongsToMany(Jabatan::class, 'jabatan_materis', 'id_mu', 'id_jabatan');
    // }

    public function submateri(){
        return $this->hasMany(SubMateri::class, 'id_sop');
    }

    public function jabatans(){
        return $this->belongsToMany(Jabatan::class, 'jabatan_materi_umums', 'id_mu', 'id_jabatan');
    }
}
