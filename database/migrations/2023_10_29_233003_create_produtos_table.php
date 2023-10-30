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
            $table->string('nome');
            $table->string('descricao')->nullable();
            $table->decimal('preco_compra', 10,2)->nullable();
            $table->decimal('preco_venda', 10,2);
            $table->unsignedInteger('estoque');
            $table->unsignedInteger('estoque_minimo')->nullable();
            $table->string('codigo_de_barra')->nullable();
            $table->date('data_de_vencimento')->nullable();
            $table->boolean('ativo')->default(true);
            $table->foreignId('categoria_id')->constrained();
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
