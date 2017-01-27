<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    public $table = 'menu';
    protected $fillable = [
        'id_menu','nama_menu','harga','kategori','id_pegawai'
    ];
    public $timestamps = false;


}
