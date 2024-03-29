<?php


namespace App\Models;


use App\Http\Requests\Filter;
use Illuminate\Database\Eloquent\Model;

class Tag extends  Model
{
    protected $table = 'tags';
    protected $fillable = [
        'name',
        'active',
        'weight'
    ];

    public function scopeFilter($query, Filter $filters)
    {
        return $filters->apply($query);
    }

    public function scopeName($query, string $name)
    {
        return $query->where('name', $name);
    }

    public function scopeActive($query, int $active)
    {
        return $query->where('active', $active);
    }
}
