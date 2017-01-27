<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    public $table = 'pesanan';
    protected $fillable = [
        'no_pesanan','tgl_pesanan','no_meja','id_pegawai',
    ];
    public $timestamps = false;
}
