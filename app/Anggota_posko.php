<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota_posko extends Model
{   
    //TABEL
    protected $table = 'anggota_hauls';

    //RElASI MODEL
    public function posko(){
        return $this->belongsTo('App\Posko');
    }
}
