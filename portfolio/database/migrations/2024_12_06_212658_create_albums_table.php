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
        Schema::create('albums', function (Blueprint $table) {
            $table->tinyIncrements('IdAlbum');
            $table->string('name', 45);
            $table->string('desc', 200);
            $table->string('front', 200);
            $table->tinyInteger('idPhoto')->unsigned();

            $table->foreign('idPhoto')->references('idPhoto')->on('photos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('albums');
    }
};
