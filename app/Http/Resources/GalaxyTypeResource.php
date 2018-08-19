<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class GalaxyTypeResource extends Resource
{
    public function toArray($request)
    {
        return [
          'id' => $this->id,
          'name' => $this->name,
          'display_name' => $this->display_name,
          'updated_at' => $this->updated_at->format('Y-m-d H:i:s'),
        ];
    }
}