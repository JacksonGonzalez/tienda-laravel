<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre', 100);
            $table->string('slug');
            $table->unsignedBigInteger('category_id');
            $table->bigInteger('cantidad')->unsigned()->default(0);
            $table->decimal('precio_actual', 12, 2)->default(0);
            $table->decimal('precio_anterior', 12, 2)->default(0);
            $table->integer('porcentaje_descuento')->unsigned()->default(0);
            $table->text('descripcion_corta');
            $table->text('descripcion_larga');
            $table->text('especificaciones');
            $table->text('datos_interes');
            $table->bigInteger('visitas')->unsigned()->default(0);
            $table->bigInteger('ventas')->unsigned()->default(0);
            $table->string('estado', 100);
            $table->char('activo', 2);
            $table->char('sliderprincipal', 2);
            $table->timestamps();

            // LLAVE FORANEA PARA CATEGORY
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
