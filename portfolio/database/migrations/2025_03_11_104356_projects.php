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
        Schema::create('projects', function (Blueprint $table){
            $table->tinyIncrements('idProject');
            $table->string('projectName', 50)->unique();
            $table->string('projectDescription', 1000);
            $table->string('tool1', 15)->nullable();
            $table->string('tool2', 15)->nullable();
            $table->string('tool3', 15)->nullable();
            $table->string('tool4', 15)->nullable();
            $table->string('tool5', 15)->nullable();
            $table->string('img1', 45);
            $table->string('img2', 45);
            $table->string('img3', 45);
            $table->string('video', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
