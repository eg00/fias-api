<?php

namespace App\Http\Controllers;

use App\Http\Resources\CityResource;
use App\Models\AddressObject;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CityController extends Controller
{
    /**
     * @group Города
     *
     * Список городов федерального, областного,
     * республиканского, краевого, окружного значения выбранного региона по uuid.
     *
     * @urlParam uuid string required id региона. Example: 052751b8-8f2a-447d-a8b2-fc2068c7e613
     * @responseFile storage/responses/citiesByRegion.json
     *
     * @param string $uuid
     * @return ResourceCollection
     */
    public function indexByRegion(string $uuid): ResourceCollection
    {
        $cities = AddressObject::onlyRegions()->with(['streets'])->findOrFail($uuid)->cities;

        return CityResource::collection($cities);
    }

    /**
     * @group Города
     *
     * Список городов районного (окружного) значения выбранного округа/района по uuid.
     *
     * @urlParam uuid string required id округа/района. Example: 178aab04-a05b-4a76-9cd4-e10f631aff16
     * @responseFile storage/responses/citiesByArea.json
     *
     * @param string $uuid
     * @return ResourceCollection
     */
    public function indexByArea(string $uuid): ResourceCollection
    {
        $cities = AddressObject::onlyAreas()->with(['streets'])->findOrFail($uuid)->cities;

        return CityResource::collection($cities);
    }

    /**
     * @group Города
     *
     * Список улиц выбранного города по uuid.
     *
     * @urlParam uuid string required id города. Example: 12de5b32-b398-41d0-9364-41cdddd01357
     * @responseFile storage/responses/city.json
     *
     * @param string $uuid
     * @return CityResource
     */
    public function show(string $uuid): CityResource
    {
        $addressObject = AddressObject::onlyCities()->with(['streets'])->findOrFail($uuid);

        return new CityResource($addressObject);
    }
}
