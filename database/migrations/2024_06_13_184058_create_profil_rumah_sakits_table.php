<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profil_rumah_sakits', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user');
            $table->string('logo');  
            $table->string('logo_polos')->nullable();
            $table->text('deskripsi_singkat');    
            $table->text('tentang_rs');    
            $table->text('tone_warna');    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil_rumah_sakits');
    }
};
