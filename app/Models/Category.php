<?php


namespace App\Models;


use App\Http\Requests\Category\CategoriesFilter;
use App\Http\Requests\Filter;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'name',
        'alias',
        'active'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function uiComponents()
    {
        return $this->belongsToMany(UiComponent::class, 'categories_ui_components');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pages()
    {
        return $this->hasMany(Page::class);
    }


    public function scopeFilter($query, Filter $filters)
    {
        return $filters->apply($query);
    }

    public function scopeActive($query, int $active = 0)
    {
        return $query->where('active', $active);
    }
}
