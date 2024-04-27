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
        Schema::create('votes', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['upVote', 'downVote']);
            $table->unsignedBigInteger('clientID');
            $table->foreign('clientID')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('questionID');
            $table->foreign('questionID')->references('id')->on('questions')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('votes');
    }
};
