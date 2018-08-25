<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WorldResource extends JsonResource
{
    public function toArray($request)
    {
        $data = [
            'id' => $this->id,
            'map_id' => $this->map_id,
            'display_name' => $this->display_name,
            'year' => $this->year,
        ];

        if ($this->investors_count !== null) {
            $data['investors'] = $this->investors_count;
        }

        if ($this->online_count !== null) {
            $data['online'] = $this->online_count;
        }

        if ($this->updated_at !== null) {
            $data['updated_at'] = $this->updated_at->format('Y-m-d H:i:s');
        }

        return $data;
    }
}