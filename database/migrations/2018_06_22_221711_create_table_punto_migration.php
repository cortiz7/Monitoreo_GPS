<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePuntoMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('punto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',100);
            $table->float('lat',8,6);
            $table->float('lng',8,6);
            $table->text('descripcion');
            $table->string('direccion',100);
            $table->string('tipos_nombre',100);
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
        Schema::dropIfExists('punto');
    }
}
