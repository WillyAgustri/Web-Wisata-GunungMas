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
        Schema::create('tb_wisata', function (Blueprint $table) {
            $table->id('Id_wisata');
            $table->string('Nama_wisata');
            $table->text('Des_wisata');
            $table->unsignedBigInteger('Latitude');
            $table->unsignedBigInteger('Longitude');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_wisata');
    }
};