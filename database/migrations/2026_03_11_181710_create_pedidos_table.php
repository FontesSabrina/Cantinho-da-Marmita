<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

public function up()
{
    Schema::create('pedidos', function (Blueprint $table) {
        $table->id();
        $table->foreignId('cliente_id')->constrained('clientes');
        $table->foreignId('marmita_id')->constrained('marmitas');
        $table->integer('quantidade');
        $table->decimal('total',10,2);
        $table->timestamps();
    });
}

    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
