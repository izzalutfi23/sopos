<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->increments('id', 10);
            $table->integer('id_kategori')->unsigned();
            $table->integer('id_unit')->unsigned();
            $table->string('kode_produk', 15);
            $table->string('nama_produk', 100);
            $table->integer('harga')->unsigned();
            $table->integer('stok')->unsigned();
            $table->integer('diskon')->unsigned();
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
        Schema::dropIfExists('produk');
    }
}
