<?php

namespace App\Http\Controllers;

use App\Http\Resources\FlatResource;
use App\Models\House;
use Illuminate\Http\Resources\Json\ResourceCollection;

class FlatController extends Controller
{
    /**
     * @group Квартиры
     *
     * Список квартир выбранного дома по uuid.
     *
     * @urlParam uuid string required id дома. Example: 3bd992c2-f0a1-46ea-a634-695c5c033b86
     * @responseFile storage/responses/flats.json
     *
     * @param string $uuid
     * @return ResourceCollection
     */
    public function __invoke(string $uuid): ResourceCollection
    {
        $flats = House::query()->with('flats')->findOrFail($uuid)->flats;

        return FlatResource::collection($flats);
    }
}
