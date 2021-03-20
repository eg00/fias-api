<?php

namespace App\Http\Controllers;

use App\Http\Resources\RegionResource;
use App\Models\AddressObject;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class RegionController extends Controller
{
    /**
     * @group Регионы
     *
     * Список регионов
     *
     * @responseFile storage/responses/regions.json
     *
     * @return ResourceCollection
     */
    public function index(): ResourceCollection
    {
        $regions = AddressObject::onlyRegions()
        ->with(['cities', 'areas'])
        ->get();
        return RegionResource::collection($regions);

    }

    /**
     * @group Регионы
     *
     * Список городов, округов и районов выбранного региона по uuid
     *
     * @urlParam uuid string required id (не aoguid) региона. Example: 052751b8-8f2a-447d-a8b2-fc2068c7e613
     * @responseFile storage/responses/region.json
     *
     * @param  string  $uuid
     * @return RegionResource
     */
    public function show(string $uuid): RegionResource
    {
        $region = AddressObject::onlyRegions()->with(['cities', 'areas'])->findOrFail($uuid);

        return new RegionResource($region);
    }
}
