<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tea extends Model
{
    protected $table="tea";
    protected $fillable = ['id','nama_tea','gambar_tea','harga_tea','keterangan_tea'];
}
