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
        Schema::create('jabatan_materis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_jabatan');
            $table->bigInteger('id_sop')->nullable();
            $table->bigInteger('id_spm')->nullable();
            $table->bigInteger('id_course')->nullable();
            $table->bigInteger('id_mu')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jabatan_materis');
    }
};
