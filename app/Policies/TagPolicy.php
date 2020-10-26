<?php

namespace App\Policies;

use App\Models\Role;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TagPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function store(User $user)
    {
        return $user->hasRole(Role::ADMIN) || $user->hasRole(Role::STARTUP);
    }

    public function update(User $user, Tag $tag)
    {
        return $user->hasRole(Role::ADMIN) || $user->hasRole(Role::STARTUP);
    }
}
