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
        Schema::create('pizza', function (Blueprint $table) {
            $table->string("pname")->primary();
            $table->string("categoryname");
            $table->boolean("vegetarian")->default(false);
            $table->foreign('categoryname')->references('cname')->on('category')->onDelete('cascade')->onUpdate('cascade');;
        });
    }


    public function down(): void
    {
        Schema::table('pizza', function (Blueprint $table) {
            $table->dropForeign(['categoryname']);
        });
        Schema::dropIfExists('pizza');
    }
};
