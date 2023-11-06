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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');//Campo recebe um texto
            $table->decimal('custo', 19, 2);// Espera um número do tipo decimal
            $table->decimal('preco', 19, 2); //Espera-se um decimal
            $table->integer('quantidade'); //Espera-se um inteiro
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
