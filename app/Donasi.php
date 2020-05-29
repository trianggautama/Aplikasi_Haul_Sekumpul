<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    use Uuid;
    //TABEL
    protected $table = 'donasis';

    //RElASI MODEL
    public function haul_sekumpul()
    {
        return $this->belongsTo('App\Haul_sekumpul');
    }
}
