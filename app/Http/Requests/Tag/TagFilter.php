<?php

namespace App\Http\Requests\Tag;

use App\Http\Requests\Filter;

class TagFilter extends Filter
{
    public function name(string $name)
    {
       return $this->builder->name($name);
    }

    public function active(int $active = 0)
    {
        return $this->builder->active($active);
    }
}
