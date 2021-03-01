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
     * Display a listing of the resource.
     * @param string $uuid
     * @return ResourceCollection
     */
    public function index(string $uuid): ResourceCollection
    {
        $cities = AddressObject::onlyRegions()->with(['streets'])->findOrFail($uuid)->cities;

        return CityResource::collection($cities);
    }

    /**
     * Display the specified resource.
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
