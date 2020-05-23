<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arraudah extends Model
{
        //TABEL
        protected $table = 'arraudahs';

        //RElASI MODEL
        public function pemasukan(){
            return $this->hasMany('App\Pemasukan');
        }

        //RElASI MODEL
        public function pengeluaran(){
            return $this->hasMany('App\Pengeluaran');
        }
}
