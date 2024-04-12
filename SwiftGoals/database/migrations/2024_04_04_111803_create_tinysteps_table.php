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
        Schema::create('tinysteps', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('stepID');
            $table->foreign('stepID')->references('id')->on('steps')->onDelete('cascade');
            $table->boolean('isComplete')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tinysteps');
    }
};
