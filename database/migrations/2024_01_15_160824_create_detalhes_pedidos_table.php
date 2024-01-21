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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')->constrained('clients')->onDelete('cascade');
            $table->foreignId('produto_id')->constrained('products')->onDelete('cascade');
            $table->integer('Quantidade');
            $table->integer('Desconto')->default(0);
            $table->enum('status', ['Em Aberto','Pago', 'Cancelado'])
            ->default('Em Aberto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
