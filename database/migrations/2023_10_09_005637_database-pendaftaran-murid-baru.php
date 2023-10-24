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
            // nama 
            $table->string('nama');
            $table->string('email');
            $table->string('Tempat_lahir');
            $table->date('Tanggal_Lahir');
            $table->string('alamat');
            // upload berkas pdf
            $table->string('Ijazah');
            // upload foto
            $table->string('foto_3x5');
            // upload scan kartu keluarga
            $table->string('prestasi')->nullable();
            // upload scan raport
            $table->string('KK');
            // upload scan ktp orang tua
            $table->string('ktp');
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
