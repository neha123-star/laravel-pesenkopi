<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tea', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_tea');
            $table->string('gambar_tea');
            $table->integer('harga_tea');
            $table->text('keterangan_tea');
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
        Schema::dropIfExists('tea');
    }
}
