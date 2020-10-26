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
}
