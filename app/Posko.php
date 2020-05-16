<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Posko extends Model
{
    use Uuid;

    public function haul_sekumpul(){
        return $this->belongsTo('App\Haul_sekumpul');
    }
}
