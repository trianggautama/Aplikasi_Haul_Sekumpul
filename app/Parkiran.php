<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parkiran extends Model
{
    //TABEL
    protected $table = 'parkirans';

    //RElASI MODEL
    public function posko(){
        return $this->belongsTo('App\Posko');
    }

    //RElASI MODEL
    public function petugas(){
        return $this->belongsTo('App\Anggota_posko');
    }
}
