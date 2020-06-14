<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Arraudah extends Model
{
    use Uuid;
    //TABEL
    protected $table = 'arraudahs';

    protected $fillable = [
        'judul', 'isi',
    ];

    //RElASI MODEL
    public function pemasukan()
    {
        return $this->HasOne('App\Pemasukan');
    }

    //RElASI MODEL
    public function pengeluaran()
    {
        return $this->HasOne('App\Pengeluaran');
    }
}
