<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kopiice extends Model
{
    protected $table="kopiice";
    protected $fillable = ['id','nama_koice','gambar_koice','harga_koice','keterangan_koice'];

    
}
