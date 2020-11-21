<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brownis extends Model
{
    protected $table="brownis";
    protected $fillable = ['id','nama_br','gambar_br','harga_br','keterangan_br'];
}
