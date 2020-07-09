<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Penutupan_jalan extends Model
{
    use Uuid;

    protected $guarded = [

    ];

    public function haul_sekumpul()
    {
        return $this->belongsTo(Haul_sekumpul::class);
    }

}
