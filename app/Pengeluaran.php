<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    use Uuid;
    //TABEL
    protected $table = 'pengeluarans';

    //RElASI MODEL
    public function posko()
    {
        return $this->belongsTo('App\Posko');
    }

    public function arraudah()
    {
        return $this->belongsTo('App\Arraudah');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
