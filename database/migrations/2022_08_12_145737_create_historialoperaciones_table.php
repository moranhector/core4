<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialoperacionesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historialoperaciones', function (Blueprint $table) {
            $table->id('id');
            $table->string('tipooperacion');
            $table->timestamp('registrado_at');
            $table->string('usuario');
            $table->string('expediente');
            $table->string('id_expediente');
            $table->string('CODIGO_REPARTICION_DESTINO');
            $table->string('REPARTICION_USUARIO');
            $table->string('DESTINATARIO');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('historialoperaciones');
    }
}
