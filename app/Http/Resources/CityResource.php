<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CityResource extends JsonResource
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
            'id' => $this->aoid,
            'type' => 'cities',
            'aoguid' => $this->aoguid,
            'parentguid' => $this->parentguid,
            'name' => $this->formalname,
            'shortname' => $this->shortname,
            'full_address' => $this->full_address,
            'children' => StreetResource::collection($this->whenLoaded('streets')),
        ];
    }
}
