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
        Schema::create('tb_membership_owner', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('code_id');
            $table->foreign('code_id')->references('id')->on('tb_premium_codes')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();

            // Agregar restricción única para evitar membresías duplicadas
            $table->unique(['code_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_membership_owner');
    }
};
