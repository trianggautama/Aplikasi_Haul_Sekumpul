<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kehilangan_orang extends Model
{
    //TABEL
    protected $table = 'kehilangan_orangs';

    //RElASI MODEL
    public function posko(){
        return $this->hasMany('App\Posko');
    }
}
