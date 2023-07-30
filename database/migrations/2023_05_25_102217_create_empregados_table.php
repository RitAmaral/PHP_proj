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
        Schema::create('empregados', function (Blueprint $table) {
            $table->id(); //criado por default
            $table->string('nome');
            $table->string('morada');
            $table->string('localidade');
            $table->timestamps(); //criado por default
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empregados');
    }
};
