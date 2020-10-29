<?php


namespace App\Http\Requests\Page;


use App\Http\Requests\Filter;

class PagesFilter extends Filter
{
    public function category(int $categoryId)
    {
        return $this->builder->category($categoryId);
    }

    public function user(int $user)
    {
        return $this->builder->user($user);
    }

    public function locale(int $locale)
    {
        return $this->builder->locale($locale);
    }

    public function startup(int $startup)
    {
        return $this->builder->startup($startup);
    }

    public function domain(int $domain)
    {
        return $this->builder->domain($domain);
    }

    public function active(int $active = 0)
    {
        return $this->builder->active($active);
    }

    public function commentable(int $commentable = 0)
    {
        return $this->builder->commentable($commentable);
    }

    public function tags(array $tags)
    {

    }
}
