<?php

namespace App\Http\Resources\Components;

use Illuminate\Http\Resources\Json\JsonResource;

class ContentComponentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        $component = $this->resource;

        return [
            'ui_component_id' => $component->ui_component_id,
            'page_id'         => $component->page_id,
            'body'            => $component->body,
            'active'          => $component->active,
            'weight'          => $component->weight
        ];
    }
}
