<?php

namespace App\Http\Controllers\Worlds;

use App\Http\Controllers\Controller;
use Starpeace\Models\Eloquent\Common\World;

class WorldController extends Controller
{
    function getGalaxy($galaxy_id)
    {
        return World::where('galaxy_id', $galaxy_id)->get();
    }
}