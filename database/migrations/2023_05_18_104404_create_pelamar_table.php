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
        Schema::create('pelamar', function (Blueprint $table) {
            $table->string('nama');
            $table->string('nik', 16)->primary();
            $table->string('email');
            $table->string('jeniskelamin', 10);
            $table->string('nohp', 15);
            $table->string('agama', 15);
            $table->string('alamat');
            $table->string('kota');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('provinsi');
            $table->string('pendidikan');
            $table->string('pasfoto');
            $table->string('ktp');
            $table->string('ijazah');
            $table->string('transkipnilai');
            $table->string('sertifikat');
            $table->string('dokumen');
            $table->foreign('email')->references('email')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelamar');
    }
};
