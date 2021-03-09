<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AreaResource extends JsonResource
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
            'aoguid' => $this->aoguid,
            'parentguid' => $this->parentguid,
            'name' => $this->formalname,
            'shortname' => $this->shortname,
            'full_address' => $this->full_address,
//            'parent' =>  new RegionResource($this->parent),
            'cities' => CityResource::collection($this->whenLoaded('cities')),
        ];
    }
}
