<?php


namespace App\Models;


use App\Http\Requests\Filter;
use Illuminate\Database\Eloquent\Model;
use League\Flysystem\Adapter\Local;

class Page extends Model
{
    protected $table = 'pages';
    protected $fillable = [
        'category_id',
        'user_id',
        'locale_id',
        'startup_id',
        'title',
        'domain',
        'alias',
        'active',
        'commentable',
        'publish_at'
    ];

    public function components()
    {
        return $this->hasMany(ContentComponent::class)->orderBy('weight');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function locale()
    {
        return $this->belongsTo(Locale::class);
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable', 'taggable');
    }



    public function scopeFilter($query, Filter $filter)
    {
        return $filter->apply($query);
    }

    public function scopeCategory($query, int $category)
    {
        return $query->where('category_id', $category);
    }

    public function scopeLocale($query, int $locale)
    {
        return $query->where('locale_id', $locale);
    }

    public function scopeUser($query, int $user)
    {
        return $query->where('user_id', $user);
    }

    public function scopeStartup($query, int $startup)
    {
        return $query->where('startup_id', $startup);
    }

    public function scopeDomain($query, int $domain)
    {
        return $query->where('domain', $domain);
    }

    public function scopeActive($query, int $active = 0)
    {
        return $query->where('active', $active);
    }

    public function scopeCommentable($query, int $commentable = 0)
    {
        return $query->where('commentable', $commentable);
    }

    public function scopeTags($query, array $tags)
    {
        return $query->whereHas('tags', function ($query) use($tags){
            return $query->whereIn('id', $tags);
        });
    }
}
