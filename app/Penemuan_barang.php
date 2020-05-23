<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penemuan_barang extends Model
{
        //TABEL
        protected $table = 'penemuan_barang';

        //RElASI MODEL
        public function posko(){
            return $this->belongTo('App\Posko');
        }
}
