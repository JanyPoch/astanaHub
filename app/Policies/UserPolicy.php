<?php

namespace App\Policies;

use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
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

    public function update(User $user, User $model){
        return $user->id === $model->id || $user->hasRole(Role::ADMIN);
    }

    public function image(User $user, User $model)
    {
        return $user->id === $model->id || $user->hasRole(Role::ADMIN);
    }
}
