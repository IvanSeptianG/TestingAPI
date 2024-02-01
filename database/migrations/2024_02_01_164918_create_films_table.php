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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('perusahaan_produksi');
            $table->string('judul_film');
            $table->integer('tahun_rilis');
            $table->integer('durasi');
            $table->double('budget');
            $table->string('homepage');
            $table->text('rangkuman');
            $table->double('popularitas');
            $table->integer('jumlah_vote');
            $table->double('rating_vote');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
