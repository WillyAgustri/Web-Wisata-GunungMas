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
        Schema::create('tb_kontak', function (Blueprint $table) {
            $table->id('Id_kontak');
            $table->string('Nama_Kontak', 30);
            $table->string('Email', 30);
            $table->string('No_telp', 20);
            $table->string('Ket', 350);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_kontak');
    }
};