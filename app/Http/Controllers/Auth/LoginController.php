<?php


namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Http\Resources\User\UserAuthResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Fortify;


class LoginController extends Controller
{
    public function login(Request $request)
    {
        $attempt = Auth::guard()->attempt(['phone' => $request->phone, 'password' => $request->password]);

        if (!$attempt) {
            $errors = [
                'common' => [
                    0 => 'Логин или пароль введен не верно'
                ]
            ];
            return response()->json($errors, Response::HTTP_UNAUTHORIZED);
        }

        $user = Auth::user();
        $user->token = $user->createToken('MyApp', [])->accessToken;

        return new UserAuthResource($user);
    }
}
