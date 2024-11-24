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
        Schema::create('order', function (Blueprint $table) { // Mudei 'order' para 'orders'
            $table->id();
            $table->string("pizzaname");
            $table->float("amount");
            $table->dateTime("taken")->default(now());
            $table->dateTime("dispatched")->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      
    Schema::dropIfExists('order');
    }
};

