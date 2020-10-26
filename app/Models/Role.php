<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable =[
        'name',
        'key'
    ];

    const ADMIN = 'admin';
    const USER = 'user';
    const STARTUP = 'startup';

    const ROLES = [
        'admin',
        'user',
        'startup'
    ];

    public static function getByKey(string $key)
    {
        return self::key($key)->first();
    }

    public function scopeKey($query, string $key)
    {
        return $query->where('key', $key);
    }
}