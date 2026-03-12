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
        Schema::create('ofertas', function (Blueprint $table) {
            $table->id();
            $table->string ('titulo');
            $table->text ('descripcion');
            $table->string ('tienda');
            $table->decimal('precio_origila',8,2);
            $table->decimal('precio_descuento',8,2); //el 8 y el 2 son lo digitos y los decimales.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ofertas');
    }
};
