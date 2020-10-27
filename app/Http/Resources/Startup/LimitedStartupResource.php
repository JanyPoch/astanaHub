<?php

namespace App\Http\Resources\Startup;

use Illuminate\Http\Resources\Json\JsonResource;

class LimitedStartupResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        $startup = $this->resource;
        return [
            'id'               => $startup->id,
            'name'             => $startup->name,
            'city'             => $startup->city,
            'foundation_year'  => $startup->foundation_year,
            'description'      => $startup->description,
            'problem_solution' => $startup->problem_solution,
            'locales'          => $startup->locales,
            'industries'       => $startup->industries
        ];
    }
}
