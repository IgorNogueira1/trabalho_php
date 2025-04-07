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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->onDelete('cascade');
            $table->enum('status', ['Pending', 'Paid', 'Canceled'])->default('Pending'); //sempre vai ser registrado como pendente
            $table->date('payment_date')->nullable(); // nullable significa que o campo pode ficar vazio
            $table->timestamps(); //Cria uma data de criação do item e uma para modificação
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
