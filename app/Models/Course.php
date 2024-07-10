<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';
    protected $guarded = [];

    public function submateri(){
        return $this->hasMany(SubMateri::class, 'id_course');
    }

    // public function jabatan(){
    //     return $this->BelongsToMany(Jabatan::class, 'jabatan_materis', 'id_course', 'id_jabatan');
    // }

    public function jabatans(){
        return $this->belongsToMany(Jabatan::class, 'jabatan_courses', 'id_course', 'id_jabatan');
    }
}
