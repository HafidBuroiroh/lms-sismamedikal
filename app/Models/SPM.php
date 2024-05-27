<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SPM extends Model
{
    use HasFactory;
    protected $table = 'spms';
    protected $guarded = [];

    public function submateri(){
        return $this->hasMany(SubMateri::class, 'id_spm');
    }
}
