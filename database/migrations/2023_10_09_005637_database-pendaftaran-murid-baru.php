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
            $table->string('berkasIjazah');
            // upload foto
            $table->string('berkasFoto');
            // upload scan kartu keluarga
            $table->string('berkasPrestasi')->nullable();
            // upload scan raport
            $table->string('berkasKK');
            // upload scan ktp orang tua
            $table->string('berkasKTPOrangTua');
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
