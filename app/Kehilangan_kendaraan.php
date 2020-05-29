<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kehilangan_kendaraan extends Model
{
    //TABEL
    protected $table = 'kehilangan_kendaraans';

    //RElASI MODEL
    public function posko(){
        return $this->hasMany('App\Posko');
    }
}
