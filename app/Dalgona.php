<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dalgona extends Model
{
    protected $table="dalgona";
    protected $fillable = ['id','nama_dg','gambar_dg','harga_dg','keterangan_dg'];
}
