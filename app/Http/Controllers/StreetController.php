<?php

namespace App\Http\Controllers;

use App\Http\Resources\StreetResource;
use App\Models\AddressObject;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class StreetController extends Controller
{
    /**
     * @group Улицы
     *
     * Список улиц выбранного города по uuid.
     *
     * @urlParam uuid string required id города. Example: 12de5b32-b398-41d0-9364-41cdddd01357
     * @responseFile storage/responses/streets.json
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
     * @group Улицы
     *
     * Список домов выбранной улицы по uuid.
     *
     * @urlParam uuid string required id города. Example: e0d16bc1-6789-4862-8004-7fa9fca3323a
     * @responseFile storage/responses/street.json
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
