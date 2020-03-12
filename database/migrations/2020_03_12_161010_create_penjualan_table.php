<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan', function (Blueprint $table) {
            $table->increments('id', 10);
            $table->integer('id_customer')->unsigned();
            $table->integer('id_cabang')->unsigned();
            $table->integer('id_karyawan')->unsigned();
            $table->string('faktur', 50);
            $table->date('tgl');
            $table->integer('total')->unsigned();
            $table->integer('diskon')->unsigned();
            $table->integer('total_akhir')->unsigned();
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
        Schema::dropIfExists('penjualan');
    }
}
