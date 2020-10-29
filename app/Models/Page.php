<?php


namespace App\Models;


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
}
