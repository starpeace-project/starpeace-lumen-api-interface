<?php

namespace App\Http\Controllers\Tycoons;

use App\Http\Controllers\Controller;
use Starpeace\Models\Eloquent\Common\Tycoon;

class TycoonController extends Controller
{
    public function getTycoonsByWorld($world_id)
    {
        return Tycoon::leftjoin('worlds_tycoons', 'worlds_tycoons.tycoon_id', '=', 'tycoons.id')
            ->where('worlds_tycoons.world_id', $world_id)->get();
    }

    public function getTycoonsByInitial($initial)
    {
        return Tycoon::where('tycoons.name', 'like', $initial . '%')->get();
    }

    public function getTycoonsByWorldAndInitial($world_id, $initial)
    {
        return Tycoon::leftjoin('worlds_tycoons', 'worlds_tycoons.tycoon_id', '=', 'tycoons.id')
            ->where('worlds_tycoons.world_id', $world_id)
            ->where('tycoons.name', 'like', $initial . '%')
            ->get();
    }

    public function getTycoons()
    {
        return Tycoon::all();
    }

    public function getTycoonMapBuildings($map_id, $tycoon_id)
    {
        
    }

    public function getTycoonMapCompanies()
    {
        
    }
}