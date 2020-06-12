<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Kehilangan_barang extends Model
{
    use Uuid;
    //TABEL
    protected $table = 'kehilangan_barangs';

    protected $fillable = [
        'posko_id', 'nama_barang', 'merk', 'deskripsi', 'no_hp', 'status',
    ];

    //RElASI MODEL
    public function posko()
    {
        return $this->belongsTo('App\Posko');
    }
}
