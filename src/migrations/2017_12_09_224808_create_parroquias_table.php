<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParroquiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parroquias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('parroquia',191);
            $table->string('cod_parr',10)->nullable();
            $table->string('cod_postal',10)->nullable();
            $table->text('latitud')->nullable();
            $table->text('longitud')->nullable();
            $table->integer('canton_id')->unsigned();
            $table->foreign('canton_id')->references('id')->on('cantons');
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
        Schema::dropIfExists('parroquias');
    }
}
