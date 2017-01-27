<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuisioner extends Model
{
    public $table = 'kuesioner';
    protected $fillable = [
        'id_kuisioner','jawaban_satu','jawaban_dua','jawaban_tiga','kritik_saran','tgl_kuesioner','id_pegawai'
    ];
    public $timestamps = false;

}
