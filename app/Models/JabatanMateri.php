<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JabatanMateri extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "jabatan_materis";
    protected $guarded = [];
}
