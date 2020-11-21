<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKopiicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kopiice', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_br');
            $table->string('gambar_br');
            $table->integer('harga_br');
            $table->text('keterangan_br');
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
        Schema::dropIfExists('kopiice');
    }
}
