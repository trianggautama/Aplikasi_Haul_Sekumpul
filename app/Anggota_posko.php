<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Anggota_posko extends Model
{
    use Uuid;

    //RElASI MODEL
    public function posko()
    {
        return $this->belongsTo('App\Posko');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
