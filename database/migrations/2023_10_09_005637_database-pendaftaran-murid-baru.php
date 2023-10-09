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
        Schema::create('ppdb-baru', function (Blueprint $table) {
            $table->id();
            // upload berkas pdf
            $table->string('ijazah');
            // upload foto
            $table->string('foto_3x5');
            // upload scan kartu keluarga
            $table->string('prestasi');
            // upload scan raport
            $table->string('KK');
            // upload scan akte kelahiran
            $table->string('akte');
            // upload scan ktp orang tua
            $table->string('ktp');
            // upload scan kartu khusus
            $table->string('khusus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppdb-baru');
    }
};
