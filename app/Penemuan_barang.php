<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Penemuan_barang extends Model
{
    use Uuid;
    //TABEL
    protected $table = 'penemuan_barangs';

    protected $fillable = [
        'posko_id', 'nama_barang', 'merk', 'deskripsi', 'status', 'penanggung_jawab',
    ];

    //RElASI MODEL
    public function posko()
    {
        return $this->belongsTo('App\Posko');
    }
}
