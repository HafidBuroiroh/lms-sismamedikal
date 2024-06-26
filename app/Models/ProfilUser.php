<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilUser extends Model
{
    use HasFactory;
    protected $table = 'profil_users';
    protected $guarded = [];

    

    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }

    public function jabatan(){
        return $this->belongsTo(Jabatan::class, 'id_jabatan');
    }
}
