<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnviosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('envios', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('id_aluno');
            $table->string('email', 512);
            $table->string('turma', 30);
            $table->string('prof', 512)->nullable();
            $table->string('tipo', 120)->nullable();
            $table->string('obs', 512)->nullable();
            $table->string('path', 2048);
            $table->tinyInteger('validado');
            $table->timestamp('horario_enviado', 6)->default('current_timestamp(6)');
            $table->integer('carga_horaria')->nullable();
            
            $table->foreign('id_aluno', 'envios_ibfk_1')->references('id')->on('usuarios')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('envios');
    }
}
