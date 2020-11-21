<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChocosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('choco', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_co');
            $table->string('gambar_co');
            $table->integer('harga_co');
            $table->text('keterangan_co');
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
        Schema::dropIfExists('choco');
    }
}
