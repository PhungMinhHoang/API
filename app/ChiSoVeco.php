<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiSoVeco extends Model
{
    protected $table = 'chi_so_veco';

    public function DonVi()
    {
        return $this->belongsTo(DonVi::class,'don_vi_id','id');
    }
    public function TuyChon()
    {
        return $this->belongsTo(TuyChon::class,'tuy_chon_id','id');
    }
}
