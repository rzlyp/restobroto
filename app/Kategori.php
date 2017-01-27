<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    ublic $table = 'kategori';
    protected $fillable = [
        'id_kategori','nama_kategori',
    ];
    public $timestamps = false;
}
