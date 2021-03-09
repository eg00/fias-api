<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FlatResource extends JsonResource
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
            'id' => $this->roomid,
            'roomguid' => $this->roomguid,
            'parentguid' => $this->houseguid,
            'flatnumber' => $this->flatnumber,
            'full_address' => $this->full_address,
        ];
    }
}
