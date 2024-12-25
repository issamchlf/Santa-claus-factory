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
        Schema::create('kids', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('foto');          
            $table->integer('age');
            $table->varchar('age range', ['0-3', '3-7', '7-12', '12-16', '16-18', '18+']);
            $table->enum('gender', ['boy', 'girl']);
            $table->enum('atitude', ['good', 'bad']);
            $table->varchar('country');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kids');
    }
};
