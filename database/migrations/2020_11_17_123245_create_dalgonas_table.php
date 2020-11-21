<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDalgonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dalgona', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_dg');
            $table->string('gambar_dg');
            $table->integer('harga_dg');
            $table->text('keterangan_dg');
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
        Schema::dropIfExists('dalgonas');
    }
}
