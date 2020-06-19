<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Haul_sekumpul extends Model
{
    use Uuid;

    public function posko()
    {
        return $this->hasMany('App\Posko');
    }

    public function donasi()
    {
        return $this->hasMany('App\Donasi');
    }

    public function Pengeluaran_donasi()
    {
        return $this->hasMany(Pengeluaran_donasi::class);
    }
}
