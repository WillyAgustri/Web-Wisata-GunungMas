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
        Schema::create('tb_hotel', function (Blueprint $table) {
            $table->id('Id_hotel');
            $table->string('Nama_hotel', 40);
            $table->text('gambar');
            $table->unsignedBigInteger('Latitude')->length(40);
            $table->unsignedBigInteger('Longitude');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_hotel');
    }
};
