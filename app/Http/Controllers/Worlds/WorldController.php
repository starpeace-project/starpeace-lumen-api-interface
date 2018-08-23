<?php

namespace App\Http\Controllers\Worlds;

use App\Http\Controllers\Controller;
use App\Http\Resources\WorldResource;
use Illuminate\Support\Facades\Cache;
use Starpeace\Models\Eloquent\Common\Tycoon;
use Starpeace\Models\Eloquent\Common\World;

class WorldController extends Controller
{
    public function getGalaxy($galaxy_id)
    {
        header('Content-Type: application/json');
        return WorldResource::collection(World::where('galaxy_id', $galaxy_id)
            ->investorCount()
            ->onlineCount()
            ->get());
//        return WorldResource::collection(
//            Cache::remember('galaxy_worlds_' . $galaxy_id, config('redis.cache_lives.worlds', 60), function () use ($galaxy_id) {
//
//            })
//        );
    }

    public function getTycoons($world_id, $initial = null)
    {
        if (!empty($initial)) {
           return Tycoon::where('name', 'like', $initial . '%')
               ->leftjoin('worlds_tycoons', 'tycoons.id', '=', 'worlds_tycoons.id')
               ->where('worlds_tycoons.world_id', $world_id)
               ->get();

        } else {
            return World::where('id', $world_id)->with('tycoons.tycoon')->get();
        }

    }
}