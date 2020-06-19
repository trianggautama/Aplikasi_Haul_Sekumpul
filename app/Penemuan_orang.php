<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Penemuan_orang extends Model
{
    use Uuid;

    protected $fillable = [
        'posko_id', 'nama_orang', 'umur', 'alamat', 'ciri_fisik',
        'deskripsi', 'status',
    ];

    //RElASI MODEL
    public function posko()
    {
        return $this->belongsTo('App\Posko');
    }
}
