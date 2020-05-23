<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Posko extends Model
{
    use Uuid;

    //TABEL
    protected $table = 'poskos';

    //RElASI MODEL
    public function haul_sekumpul(){
        return $this->belongsTo('App\Haul_sekumpul');
    }

    //RElASI MODEL
    public function parkiran(){
        return $this->hasMany('App\Parkiran');
    }

    //RElASI MODEL
    public function ketua_posko(){
        return $this->hasMany('App\Ketua_posko');
    }

    //RElASI MODEL
    public function anggota_posko(){
        return $this->hasMany('App\Anggota_posko');
    }

    //RElASI MODEL
    public function informasi_rombongan(){
        return $this->hasMany('App\Informasi_rombongan');
    }

    //RElASI MODEL
    public function kehilangan_barang(){
        return $this->hasMany('App\Kehilangan_barang');
    }

    //RElASI MODEL
    public function penemuan_barang(){
        return $this->hasMany('App\Penemuan_barang');
    }

    //RElASI MODEL
    public function kehilangan_kendaraan(){
        return $this->hasMany('App\Kehilangans_kendaraan');
    }

    //RElASI MODEL
    public function penemuan_kendaraan(){
        return $this->hasMany('App\Penemuan_kendaraan');
    }

    //RElASI MODEL
    public function kehilangan_orang(){
        return $this->hasMany('App\Kehilangans_orang');
    }
    
    //RElASI MODEL
    public function penemuan_orang(){
        return $this->hasMany('App\Penemuan_orang');
    }
}
