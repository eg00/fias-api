<?php

namespace App\Http\Controllers;

use App\Http\Resources\HouseResource;
use App\Models\AddressObject;
use App\Models\House;
use Illuminate\Http\Resources\Json\ResourceCollection;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
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
     * Display the specified resource.
     *
     * @param  string $uuid
     * @return HouseResource
     */
    public function show(string $uuid): HouseResource
    {
        $house = House::query()->with('rooms')->findOrFail($uuid);

        return new HouseResource($house);
    }
}
