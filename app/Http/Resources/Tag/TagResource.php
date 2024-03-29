<?php

namespace App\Http\Resources\Tag;

use Illuminate\Http\Resources\Json\JsonResource;

class TagResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'     => $this->resource->id,
            'name'   => $this->resource->name,
            'active' => $this->resource->active,
            'weight' => $this->resource->weight
        ];
    }
}
