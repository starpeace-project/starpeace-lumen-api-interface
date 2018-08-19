<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GalaxyResource extends JsonResource
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'galaxy_id' => $this->id,
            'galaxy_type_id' => $this->galaxy_type_id,
            'name' => $this->display_name,
            'updated_at' => $this->updated_at,
        ];
    }
}