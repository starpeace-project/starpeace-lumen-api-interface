<?php

namespace App\Http\Collections;

use Illuminate\Http\Resources\Json\ResourceCollection;

class GalaxyTypeCollection extends ResourceCollection
{
    public function toArray($request)
    {
        return [
          'data' => $this->collection,
        ];
    }
}