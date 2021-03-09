<?php

namespace App\Http\Controllers;

use App\Http\Resources\HouseResource;
use App\Models\AddressObject;
use App\Models\House;
use Illuminate\Http\Resources\Json\ResourceCollection;

class HouseController extends Controller
{
    /**
     * @group Дома
     *
     * Список домов выбранной улицы по uuid.
     *
     * @urlParam uuid string required id улицы. Example: e0d16bc1-6789-4862-8004-7fa9fca3323a
     * @responseFile storage/responses/houses.json
     *
     * @param string $uuid
     * @return ResourceCollection
     */
    public function index(string $uuid): ResourceCollection
    {
        $houses = AddressObject::onlyStreets()->findOrFail($uuid)->houses;

        return HouseResource::collection($houses);
    }

    /**
     * @group Дома
     *
     * Список квартир выбранного дома по uuid.
     *
     * @urlParam uuid string required id дома. Example: 3bd992c2-f0a1-46ea-a634-695c5c033b86
     * @responseFile storage/responses/house.json
     *
     * @param  string $uuid
     * @return HouseResource
     */
    public function show(string $uuid): HouseResource
    {
        $house = House::query()->with('flats')->findOrFail($uuid);

        return new HouseResource($house);
    }
}
