<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MateriUmum extends Model
{
    use HasFactory;
    protected $table = 'materi_umums';
    protected $guarded = [];

    public function jabatan(){
        return $this->BelongsToMany(Jabatan::class, 'jabatan_materis', 'id_mu', 'id_jabatan');
    }
}
