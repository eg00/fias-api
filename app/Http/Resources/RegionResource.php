<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RegionResource extends RegionIndexResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return array_merge(parent::toArray($request),[
            'children' => array_merge(
                StreetResource::collection($this->whenLoaded('streets'))->toArray($request),
                CityResource::collection($this->whenLoaded('cities'))->toArray($request),
                AreaResource::collection($this->whenLoaded('areas'))->toArray($request),
            )
        ]);
    }
}
