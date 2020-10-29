<?php


namespace App\Http\Controllers;


use App\Http\Requests\PostUserImageRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\User\MyResource;
use App\Http\Resources\User\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function my()
    {
        $user = Auth::user();

        if (!$user)
            return response()->json(['error' => ''], 401);

        return new MyResource($user);
    }

    public function get(User $user)
    {
        return new UserResource($user);
    }

    public function update(User $user, UpdateUserRequest $request)
    {
        $user->update($request->validated());

        return new UserResource($user);
    }

    public function postImage(User $user, PostUserImageRequest $request)
    {
        $oldImage = $user->image;
        if (isset($oldImage))
            Storage::delete($oldImage);

        $path = $user->makeStoragePath();
        if (!file_exists($path))
            Storage::makeDirectory($path, 0755, true, true);

        $image = Storage::putFile($path . $user->id, $request->file('image'));

        $user->update(['image' => $image]);

        return new UserResource($user);
    }
}
