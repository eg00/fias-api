<?php

namespace App\Http\Controllers;

use App\Http\Resources\AreaResource;
use App\Models\AddressObject;
use Illuminate\Http\Resources\Json\ResourceCollection;

class AreaController extends Controller
{
    /**
     * @group Округа и районы
     *
     * Список округов и районов выбранного региона по uuid.
     *
     * @urlParam uuid string required id региона. Example: 052751b8-8f2a-447d-a8b2-fc2068c7e613
     * @responseFile storage/responses/areas.json
     *
     * @param  string  $uuid
     * @return ResourceCollection
     */
    public function index(string $uuid): ResourceCollection
    {
        $areas = AddressObject::onlyRegions()->with(['areas'])->findOrFail($uuid)->areas;

        return AreaResource::collection($areas);
    }

    /**
     * @group Округа и районы
     *
     * Список городов выбранного округа/района по uuid.
     *
     * @urlParam uuid string required id округа/района. Example: 178aab04-a05b-4a76-9cd4-e10f631aff16
     * @responseFile storage/responses/area.json
     *
     * @param string $uuid
     * @return AreaResource
     */
    public function show(string $uuid): AreaResource
    {
        $area = AddressObject::onlyAreas()->with(['cities'])->findOrFail($uuid);

        return new AreaResource($area);
    }
}
