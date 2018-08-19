<?php

namespace App\Http\Collections;

use Illuminate\Http\Resources\Json\ResourceCollection;

class GalaxyCollection extends ResourceCollection
{
    /**
     * Transform the galaxy collection into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
        ];
    }
}