<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoConformidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noConformidad', function (Blueprint $table) {
            $table->increments('idNoConformidad');
            $table->int('nro', 8);
            //$table->usuario que carga la NC -- tomar datos del que esta logueado
            $table->string('detalle', 255);
            $table->string('medidaCorrectiva',140); // la que tipea el ususario como sugerencia
            //$table-> seleccion de la lista tipificada de accionCorrectiva
            //$table-> "categoria" de la lista tipificada
            //$table-> "procedencia" es quien evidencia la no conformidad. Se selecciona de la lista tipificada
            $table->string('procedenciaOtro', 11); //si la procedencia no esta en la lista, pueden ingresar un CUIT o CUIL.
            $table->string('observacion', 255);
            //$table-> notificaciones ---- MAS ADELANTE!!!  cuaaac!!! una tabla de notificaciones pensar qeu va 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('noConformidad');
    }
}
