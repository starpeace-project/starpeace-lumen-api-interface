<?php

namespace App\Http\Controllers\Galaxies;

use App\Http\Controllers\Controller;
use App\Http\Resources\GalaxyResource;
use App\Http\Resources\GalaxyTypeResource;
use Illuminate\Support\Facades\Cache;
use Starpeace\Models\Eloquent\Common\Galaxy;
use Starpeace\Models\Eloquent\Common\GalaxyType;

class GalaxyController extends Controller
{
    public function getGalaxies()
    {
        return GalaxyResource::collection(
            Galaxy::with(['type', 'worlds'])->get()
//            Cache::remember('galaxies', config('redis.cache_lives.galaxies', 60), function () {
//
//            })
        );
    }

    public function getTypes()
    {
        return GalaxyTypeResource::collection(
            Cache::remember('galaxy_types', config('redis.cache_lives.galaxy_types', 60), function () {
                return GalaxyType::all();
            })
        );
    }
}