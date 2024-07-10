<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SOP extends Model
{
    use HasFactory;
    protected $table = 'sops';
    protected $guarded = [];

    public function submateri(){
        return $this->hasMany(SubMateri::class, 'id_sop');
    }

    // public function jabatan(){
    //     return $this->BelongsToMany(Jabatan::class, 'jabatan_materis', 'id_sop', 'id_jabatan');
    // }

    public function jabatans(){
        return $this->belongsToMany(Jabatan::class, 'jabatan_sops', 'id_sop', 'id_jabatan');
    }
}
