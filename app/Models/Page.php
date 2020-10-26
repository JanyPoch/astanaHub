<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'pages';
    protected $fillable = [
        'category_id',
        'user_id',
        'startup_id',
        'title',
        'domain',
        'alias',
        'active',
        'publish_at'
    ];

}
