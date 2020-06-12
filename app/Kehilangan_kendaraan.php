<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Kehilangan_kendaraan extends Model
{
    use Uuid;
    //TABEL
    protected $table = 'kehilangan_kendaraans';

    protected $fillable = [
        'posko_id', 'plat_nomor', 'merk_kendaraan', 'warna', 'nama_pelapor'
        , 'no_hp_pelapor', 'status',
    ];

    //RElASI MODEL
    public function posko()
    {
        return $this->belongsTo('App\Posko');
    }
}
