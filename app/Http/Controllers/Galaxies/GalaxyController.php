<?php

namespace App\Http\Controllers\Galaxies;

use App\Http\Controllers\Controller;
use App\Http\Resources\GalaxyResource;
use Starpeace\Models\Eloquent\Common\Galaxy;
use Starpeace\Models\Eloquent\Common\GalaxyType;

class GalaxyController extends Controller
{
    public function getGalaxies()
    {
        return GalaxyResource::collection(Galaxy::all());
    }

    public function getTypes()
    {
        return GalaxyType::all();
    }
}