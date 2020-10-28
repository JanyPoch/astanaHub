<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Startup extends Model
{
    protected $table = 'startups';
    protected $fillable = [
        'name',
        'start_capital',
        'investments',
        'investments_sum',
        'city_id',
        'foundation_year',
        'description',
        'problem_solution',
        'sales_sum',
        'income',
        'status'
    ];

    const INVESTMENTS = [
        0 => 'Нет',
        1 => 'Да'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function locales()
    {
       return $this->belongsToMany(Locale::class, 'startups_locales');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function industries()
    {
        return $this->belongsToMany(Industry::class, 'startups_industries');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function members()
    {
        return $this->hasManyThrough(User::class, StartupMember::class, 'startup_id', 'id', 'id', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
