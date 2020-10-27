<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class StartupMember extends Model
{
    protected $table = 'startups_members';
    protected $fillable = [
        'startup_id',
        'user_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function startup()
    {
        return $this->belongsTo(Startup::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function member()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'startups_members_roles', 'startups_members_id', 'role_id');
    }
}
