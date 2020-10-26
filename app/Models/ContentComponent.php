<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ContentComponent extends Model
{
    protected $table = 'content_components';
    protected $fillable = [
        'ui_component_id',
        'page_id',
        'body',
        'active',
        'weight'
    ];
}
