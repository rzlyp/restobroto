<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    public $table = 'resep';
    protected $fillable = [
        'id_resep','id_menu','id_bahan','jumlah'
    ];
    public $timestamps = false;
}
