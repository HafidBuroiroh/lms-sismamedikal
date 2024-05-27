<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubMateri extends Model
{
    use HasFactory;
    protected $table = 'sub_materis';
    protected $guarded = [];

    public function sop(){
        return $this->belongsTo(SOP::class, 'id_sop');
    }

    public function spm(){
        return $this->belongsTo(SPM::class, 'id_spm');
    }

    public function course(){
        return $this->belongsTo(Course::class, 'id_course');
    }
}
