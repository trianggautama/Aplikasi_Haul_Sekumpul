<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Lokasi_parkir extends Model
{
    use Uuid;

    protected $fillable = [
        'posko_id', 'alamat', 'anggota_posko_id', 'luas_parkir', 'jenis_parkir',
    ];

    public function posko()
    {
        return $this->belongsTo(Posko::class);
    }

    public function anggota_posko()
    {
        return $this->belongsTo(Anggota_posko::class);
    }

}
