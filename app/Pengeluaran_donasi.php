<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Pengeluaran_donasi extends Model
{
    use Uuid;

    protected $fillable = [
        'haul_sekumpul_id', 'penanggung_jawab', 'keperluan', 'besaran',
    ];

    public function haul_sekumpul()
    {
        return $this->belongsTo(Haul_sekumpul::class);
    }

}
