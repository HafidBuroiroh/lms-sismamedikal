<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JabatanSpm extends Model
{
    use HasFactory;

    protected $table = 'jabatan_spms';

    protected $primaryKey = 'id';

    protected $guarded = [];
}
