<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_galeri', function (Blueprint $table) {
            $table->id('Id_galeri');
            $table->unsignedBigInteger('Id_wisata');
            $table->string('Nama_galeri');
            $table->text('Foto');
            $table->foreign('Id_wisata')->references('Id_wisata')->on('tb_wisata')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_galeri');
    }
};