<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    use HasFactory;
    protected $table = 'pertanyaans';
    protected $guarded = [];

    public function submateri(){
        return $this->belongsTo(SubMateri::class, 'id_submateri');
    }
    
    public function result(){
        return $this->hasMany(Result::class, 'id_user');
    }
}
