<?php


namespace App\Http\Requests\Category;


use App\Http\Requests\Filter;

class CategoriesFilter extends Filter
{
    public function active(int $active = 0)
    {
        return $this->builder->active($active);
    }
}
