<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';
    protected $fillable = [
        'name',
        'alias',
        'active'
    ];

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
