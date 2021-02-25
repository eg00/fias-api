<?php

namespace App\Http\Controllers;

use App\Http\Resources\RegionResource;
use App\Models\AddressObject;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class RegionController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  Request  $request
     * @return AnonymousResourceCollection
     */
    public function index(Request $request): AnonymousResourceCollection
    {
        $regions = AddressObject::onlyRegions()->with(['cities'])->get();
        return RegionResource::collection($regions);
    }

    /**
     * @param  string  $uuid
     * @return RegionResource
     */
    public function show(string $uuid): RegionResource
    {
        $addressObject = AddressObject::onlyRegions()->with(['cities'])->findOrFail($uuid);

        return new RegionResource($addressObject);
    }
}
