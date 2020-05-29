<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penemuan_kendaraan extends Model
{
        //TABEL
        protected $table = 'penemuan_kendaraan';

        //RElASI MODEL
        public function posko(){
            return $this->belongsTo('App\Posko');
        }
}
