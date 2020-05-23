<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
        //TABEL
        protected $table = 'pengeluaran';

        //RElASI MODEL
        public function posko(){
            return $this->belongsTo('App\Posko');
        }
}
