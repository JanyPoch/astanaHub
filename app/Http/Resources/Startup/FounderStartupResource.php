<?php

namespace App\Http\Resources\Startup;

use App\Models\Startup;
use Illuminate\Http\Resources\Json\JsonResource;

class FounderStartupResource extends JsonResource
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
            'industries'       => $startup->industries,
            'start_capital'    => $startup->start_capital,
            'investments'      => Startup::INVESTMENTS[$startup->investments],
            'investments_sum'  => $startup->investments_sum,
            'sales_sum'        => $startup->sales_sum,
            'income'           => $startup->income
        ];
    }
}
