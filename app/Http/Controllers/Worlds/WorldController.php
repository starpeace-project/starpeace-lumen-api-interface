<?php

namespace App\Http\Controllers\Worlds;

use App\Http\Controllers\Controller;
use App\Http\Resources\WorldResource;
use Illuminate\Support\Facades\Cache;
use Starpeace\Models\Eloquent\Common\World;

class WorldController extends Controller
{
    function getGalaxy($galaxy_id)
    {
        return WorldResource::collection(
            Cache::remember('galaxy_worlds_' . $galaxy_id, 60, function () use ($galaxy_id) {
                return World::where('galaxy_id', $galaxy_id)->get();
            })
        );
    }
}