<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    use HasFactory;

    use HasFactory;
    protected $table = 'jawabans';
    protected $guarded = [];

    public function result(){
        return $this->belongsTo(Result::class, 'id_result');
    }
    
    public function pertanyaan(){
        return $this->belongsTo(Pertanyaan::class, 'id_pertanyaan');
    }
}
