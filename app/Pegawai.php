<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
     public $table = 'pegawai';
    protected $fillable = [
        'id_pegawai','nama','alamat','tempat_lahir','tgl_lahir','jk','no_telp','username','role','password'
    ];
    public $timestamps = false;

}
