<?php


namespace App\Models;


use App\Http\Requests\Filter;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';
    protected $fillable = [
        'name',
        'alias',
        'active',
        'country_id'
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function scopeFilter($query, Filter $filters)
    {
        return $filters->apply($query);
    }

    public function scopeCountry($query, int $countryId)
    {
        return $query->where('country_id', $countryId);
    }
}
