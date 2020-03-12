<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStokinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stokin', function (Blueprint $table) {
            $table->increments('id', 10);
            $table->integer('id_produk')->unsigned();
            $table->integer('id_supplier')->unsigned();
            $table->integer('qty')->unsigned();
            $table->date('tgl');
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
        Schema::dropIfExists('stokin');
    }
}
