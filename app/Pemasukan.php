<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Pemasukan extends Model
{
    use Uuid;
    //TABEL
    protected $table = 'pemasukans';

    //RElASI MODEL
    public function arraudah()
    {
        return $this->BelongsTo('App\Arraudah');
    }

    public function user()
    {
        return $this->BelongsTo('App\User');
    }

}
