<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WorldResource extends JsonResource
{
    public function toArray($request)
    {
        $data = [
            'id' => $this->id,
            'galaxy_id' => $this->galaxy_id,
            'map_id' => $this->map_id,
            'name' => $this->name,
            'display_name' => $this->display_name,
        ];

        if (!empty($this->updated_at)) {
            $data['update_at'] = $this->updated_at->format('Y-m-d H:i:s');
        }

        return $data;
    }
}