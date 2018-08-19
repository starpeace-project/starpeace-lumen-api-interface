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
            'galaxy_type' => $this->type->name,
            'name' => $this->display_name,
            'updated_at' => $this->updated_at->format('Y-m-d H:m:s'),
        ];
    }
}