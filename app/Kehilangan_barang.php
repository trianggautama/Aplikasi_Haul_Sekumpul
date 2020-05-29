<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kehilangan_barang extends Model
{
    //TABEL
    protected $table = 'kehilangan_barangs';

    //RElASI MODEL
    public function posko(){
        return $this->belongsTo('App\Posko');
    }
}
