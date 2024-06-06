<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('razao_social');
            $table->integer('inscricao_estadual');
            $table->integer('cnpj');
            $table->string('banco');
            $table->integer('agencia');
            $table->integer('conta');
            $table->string('tipo_conta');
            $table->string('pix');
            $table->string('telefone_1');
            $table->string('telefone_2');
            $table->string('direto_com');
            $table->string('email');
            $table->string('ip')->default('0.0.0.0');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
