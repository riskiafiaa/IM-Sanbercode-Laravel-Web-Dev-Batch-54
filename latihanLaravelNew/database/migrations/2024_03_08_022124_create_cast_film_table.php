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
        Schema::create('cast_film', function (Blueprint $table) {
            $table->id();
            $table->string('nama_film');
            $table->string('nama_peran');

            $table->unsignedBigInteger('cast_id');
            $table->foreign('cast_id')->references('id')->on('cast');

            $table->unsignedBigInteger('film_id');
            $table->foreign('film_id')->references('id')->on('film');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cast_film');
    }
};
