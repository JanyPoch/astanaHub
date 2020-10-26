<?php

namespace App\Http\Requests\City;


use App\Http\Requests\Filter;

class CityFilter extends Filter
{
    public function country(int $id)
    {
        return $this->builder->country($id);
    }
}
