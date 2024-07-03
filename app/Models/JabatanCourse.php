<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JabatanCourse extends Model
{
    use HasFactory;

    protected $table = 'jabatan_courses';

    protected $primaryKey = 'id';

    protected $guarded = [];

    public function jabatans(){
        return $this->belongsToMany(Jabatan::class, 'jabatan_courses');
    }
}
