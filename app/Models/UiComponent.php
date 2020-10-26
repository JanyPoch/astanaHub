<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class UiComponent extends Model
{
    protected $table ='ui_components';
    protected $fillable = [
        'title',
        'key',
        'rules',
        'active',
        'handler',
        'body'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'categories_ui_components');
    }
}
