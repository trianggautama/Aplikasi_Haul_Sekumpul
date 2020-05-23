<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    //TABEL
    protected $table = 'donasis';

    //RElASI MODEL
    public function haul(){
        return $this->belongTo('App\Haul_sekumpul');
    }
}
