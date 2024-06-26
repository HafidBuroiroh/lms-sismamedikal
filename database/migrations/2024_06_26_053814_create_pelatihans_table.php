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
        Schema::create('pelatihans', function (Blueprint $table) {
            $table->id();
            $table->text('judul');
            $table->text('deskripsi');
            $table->text('instruktur');
            $table->string('foto');
            $table->enum('kategori', ['sop', 'spm', 'course', 'materi_umum']);
            $table->enum('sertifikat', ['skp', 'non_skp']);
            $table->date('tanggal');
            $table->bigInteger('biaya');
            $table->text('link_lms_kemenkes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelatihans');
    }
};
