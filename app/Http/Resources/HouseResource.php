<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HouseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
//        return parent::toArray($request);
        return [
            'id' => $this->houseid,
            'houseguid' => $this->houseguid,
            'parentguid' => $this->aoguid,
            'housenum' => $this->housenum,
            'full_address' => $this->full_address,
            'flats' => FlatResource::collection($this->whenLoaded('flats')),
        ];
    }
}
