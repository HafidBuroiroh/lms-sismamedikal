<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kebijakan extends Model
{
    use HasFactory;

    protected $table = 'kebijakans';

    protected $primaryKey = 'id';

    protected $guarded = [];

    public function jabatan(){
        return $this->belongsTo(Jabatan::class, 'id_jabatan');
    }
}
