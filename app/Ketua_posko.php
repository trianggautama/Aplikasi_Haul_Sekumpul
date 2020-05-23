<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ketua_posko extends Model
{
    //TABEL
    protected $table = 'ketua_poskos';

    //RElASI MODEL
    public function posko(){
        return $this->hasMany('App\Posko');
    }
}
