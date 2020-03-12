<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->increments('id', 10);
            $table->integer('id_user')->unsigned();
            $table->integer('id_cabang')->unsigned();
            $table->string('nama_karyawan', 50);
            $table->enum('j_kel', ['L', 'P']);
            $table->string('no_hp', 20);
            $table->text('alamat', 100);
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
        Schema::dropIfExists('karyawan');
    }
}
