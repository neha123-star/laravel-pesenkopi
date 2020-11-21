<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBottlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bottle', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_bt');
            $table->string('gambar_bt');
            $table->integer('harga_bt');
            $table->text('keterangan_bt');
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
        Schema::dropIfExists('bottle');
    }
}
