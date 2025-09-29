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
        Schema::create('uts', function (Blueprint $table) {
            $table->id('uts_id');                   // Primary key
        $table->string('nama_matkul');          // Nama matkul
        $table->integer('jumlah_sks');          // Jumlah sks
        $table->text('keterangan')->nullable(); // Keterangan (boleh kosong)
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uts');
    }
};
