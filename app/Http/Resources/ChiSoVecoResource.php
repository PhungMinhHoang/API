<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ChiSoVecoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'donvi' => $this->DonVi->ten,
            'tuychon' => $this->TuyChon->ten,
            'chiso' => $this->chi_so,
        ];
    }
}
