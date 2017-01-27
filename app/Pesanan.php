<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
     public $table = 'pesanan';
    protected $fillable = [
        'no_pesanan','tgl_pesanan','id_pegawai','total'
    ];
    public $timestamps = false;

}
