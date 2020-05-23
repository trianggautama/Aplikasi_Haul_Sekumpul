<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemasukan extends Model
{  
        //TABEL
        protected $table = 'pemasukans';

        //RElASI MODEL
        public function arraudah(){
            return $this->hasMany('App\Arraudah');
        }

}
