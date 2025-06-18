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
        Schema::create('jatah_cutis', function (Blueprint $table) {
            $table->id();
            $table->integer('tahun');
            $table->integer('jumlah'); // jumlah cuti
            $table->string('nip', 20); // harus tidak nullable jika foreign key
            $table->timestamps();

            // foreign key ke tabel pegawais.nip
            $table->foreign('nip')->references('nip')->on('pegawais')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jatah_cutis');
    }
};
