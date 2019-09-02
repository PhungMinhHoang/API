<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TuyChon extends Model
{
    protected $table = 'tuy_chon';

    public function getChiSoVeo()
    {
        return $this->hasMany(ChiSoVeco::class);
    }
}
