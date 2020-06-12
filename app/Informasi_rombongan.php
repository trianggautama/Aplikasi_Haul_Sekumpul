<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Informasi_rombongan extends Model
{
    use Uuid;
    //TABEL
    protected $table = 'informasi_rombongans';

    protected $fillable = [
        'haul_sekumpul_id', 'posko_id', 'asal_rombongan', 'nama_ketua_rombongan',
        'jumlah_rombongan', 'no_hp',
    ];

    //RElASI MODEL
    public function posko()
    {
        return $this->belongsTo('App\Posko');
    }

    public function haul_sekumpul()
    {
        return $this->belongsTo('App\Haul_sekumpul');
    }
}
