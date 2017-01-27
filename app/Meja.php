<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meja extends Model
{
    public $table = 'meja';
    protected $fillable = [
        'no_meja','status','no_transaksi'
    ];
    public $timestamps = false;
}
