<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RegionResource extends JsonResource
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
            'name' => $this->offname,
            'cities' => CityResource::collection($this->whenLoaded('cities')),
            'areas' => AreaResource::collection($this->whenLoaded('areas')),
        ];
    }
}
