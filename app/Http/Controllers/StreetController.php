<?php

namespace App\Http\Controllers;

use App\Http\Resources\StreetResource;
use App\Models\AddressObject;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class StreetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param string $uuid
     * @return ResourceCollection
     */
    public function index(string $uuid): ResourceCollection
    {
       $streets = AddressObject::onlyCities()->findOrFail($uuid)->streets;

       return StreetResource::collection($streets);
    }

    /**
     * Display the specified resource.
     *
     * @param  string $uuid
     * @return StreetResource
     */
    public function show(string $uuid): StreetResource
    {
        $addressObject = AddressObject::onlyStreets()->with(['houses'])->findOrFail($uuid);

        return new StreetResource($addressObject);
    }
}
