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
        Schema::create('tb_products', function (Blueprint $table) {
            $table->id(); // ID auto incremental
            $table->string('nombre'); // Nombre del producto
            $table->text('descripccion')->nullable(); // Descripción del producto, puede ser nula
            $table->string('marca')->nullable(); // Marca del producto, puede ser nula
            $table->string('modelo')->nullable(); // Modelo del producto, puede ser nula
            $table->decimal('precio', 8, 2); // Precio del producto
            $table->longText('foto')->nullable(); // Foto del producto, puede ser nula
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_products');
    }
};
