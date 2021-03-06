<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonVi extends Model
{
    protected $table = 'don_vi';

    public function getChiSoVeo()
    {
        return $this->hasMany(ChiSoVeco::class);
    }
}
