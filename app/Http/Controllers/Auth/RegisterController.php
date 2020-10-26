<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\User\UserRegisterResource;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $fields = $request->validated();
        $fields['password'] = Hash::make($fields['password']);

        $user = User::create($fields);
        $user->roles()->attach(Role::getByKey(Role::USER)->id);

        //TODO::phone confirmition

        return new UserRegisterResource($user);
    }

}
