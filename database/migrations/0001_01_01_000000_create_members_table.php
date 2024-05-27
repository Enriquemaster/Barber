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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->foreignId('administrador_id')->nullable()
                ->constrained('administradors')->cascadeOnDelete();

            $table->foreignId('customer_id')->nullable()
                ->constrained('customers')->cascadeOnDelete();

            $table->foreignId('challenge_id')->nullable()
                ->constrained('challenges')->cascadeOnDelete();

            $table->foreignId('promotion_id')->nullable()
                ->constrained('promotions')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
