<?php

namespace App\Http\Controllers\Galaxies;

use App\Http\Controllers\Controller;
use App\Http\Resources\GalaxyResource;
use App\Http\Resources\GalaxyTypeResource;
use Illuminate\Support\Facades\Cache;
use Starpeace\Models\Eloquent\Common\Galaxy;
use Starpeace\Models\Eloquent\Common\GalaxyType;
use App\Http\Resources\WorldResource;
use Starpeace\Models\Eloquent\Common\World;

class GalaxyController extends Controller
{
    public function getGalaxy($galaxy_id)
    {
        return WorldResource::collection(World::where('galaxy_id', $galaxy_id)
            ->investorCount()
            ->onlineCount()
            ->get());
    }

    public function getGalaxies()
    {
        return GalaxyResource::collection(
            Galaxy::with(['type', 'worlds'])->get()
        );
    }

    public function getGalaxyTypes()
    {
        return GalaxyTypeResource::collection(
            Cache::remember('galaxy_types', config('redis.cache_lives.galaxy_types', 60), function () {
                return GalaxyType::all();
            })
        );
    }
}