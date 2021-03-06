<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StreetResource extends JsonResource
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
            'type' => 'streets',
            'aoguid' => $this->aoguid,
            'parentguid' => $this->parentguid,
            'name' => $this->formalname,
            'shortname' => $this->shortname,
            'full_address' => $this->full_address,
            'parent' => new CityResource($this->parent),
            'children' => HouseResource::collection($this->whenLoaded('houses')),
        ];
    }
}
