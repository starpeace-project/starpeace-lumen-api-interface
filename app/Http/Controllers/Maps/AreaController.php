<?php

namespace App\Http\Controllers\Maps;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Input;

class AreaController extends Controller
{
    /**
     * Get Area is in charge of returning the buildings
     * on the map within a specific view envelope.
     *
     * It requires the following passed in the post request.
     *
     * Location X, Location Co-ordinate (x_location)
     * Location Y, Location Co-ordinate (y_location)
     * Tile X, Tile width
     * Tile Y, Tile Height
     * Envelope W, View envelope width
     * Envelope H, View envelope height
     *
     * @param Request $request
     * @throws ValidationException
     */
    public function getArea(Request $request)
    {
        $this->validate($request, [
            'map_id' => 'required|integer|exists:maps,id',
            'location_x' => 'required|integer',
            'location_y' => 'required|integer',
            'tile_x' => 'required|integer',
            'tile_y' => 'required|integer',
            'envelope_w' => 'required|integer',
            'envelope_h' => 'required|integer',
        ]);

        // Lets handle the calculation in two parts one for x and one for y

        //x
        $startX = Input::get('location_x');
        $tileX = Input::get('tile_x');
        $envelopeW = Input::get('envelope_w');

        // If our starting x is not divisible by our tile x we need to fix
        if ($startX % $tileX != 0) {
            //We fix by rounding down
            $offset = $startX % $tileX;
            //$offset now contains the difference
            $startX -= $offset;
            // now we should be starting at a valid tile starting block

            dd($startX);
        }


    }

    private function getLocationStartPoints($startX, $endX, $tileX)
    {
        for ($number = $startX; $number <= $endX; $tileX++) {

        }
    }
}
