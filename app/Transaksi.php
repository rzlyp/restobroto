<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    
    public $table = 'detail_transaksi';
    protected $fillable = [
        'id_detail_transaksi','no_pesanan','id_menu','no_meja','jumlah','id_pegawai','subtotal'
    ];
    public $timestamps = false;
}
