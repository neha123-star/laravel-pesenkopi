<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choco extends Model
{
    protected $table="choco";
    protected $fillable = ['id','nama_co','gambar_co','harga_co','keterangan_co'];
}
