<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informasi_rombongan extends Model
{
    //TABEL
    protected $table = 'informasi_rombongans';

    //RElASI MODEL
    public function Posko(){
        return $this->belongsTo('App\Posko');
    }
}
