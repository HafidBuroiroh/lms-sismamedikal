<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JabatanMateriUmum extends Model
{
    use HasFactory;

    protected $table = 'jabatan_materi_umums';

    protected $primaryKey = 'id';

    protected $guarded = [];
}
