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
            'type' => 'regions',
            'aoguid' => $this->aoguid,
            'name' => $this->offname,
//            'cities' => CityResource::collection($this->whenLoaded('cities')),
//            'areas' => AreaResource::collection($this->whenLoaded('areas')),
            'children' => array_merge(
                CityResource::collection($this->whenLoaded('cities'))->toArray($request),
                AreaResource::collection($this->whenLoaded('areas'))->toArray($request)
            )
        ];
    }
}
