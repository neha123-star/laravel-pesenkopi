<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bottle extends Model
{
    protected $table="bottle";
    protected $fillable = ['id','nama_bt','gambar_bt','harga_bt','keterangan_bt'];
}
