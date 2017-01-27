<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BahanBaku extends Model
{
    public $table = 'bahan_baku';
    protected $fillable = [
        'id_bahan','nama_bahan','stok','tgl_masuk','tgl_kadaluarsa','id_pegawai'
    ];
    public $timestamps = false;
}
