<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    protected $table = 'results';
    protected $guarded = [];

    public function submateri(){
        return $this->belongsTo(SubMateri::class, 'id_submateri');
    }

    public function jawabans(){
        return $this->hasMany(Jawaban::class, 'id_result');
    }
    
    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }
}
