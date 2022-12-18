<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        $data = $request->only(["email", "password"]);
        if (!auth()->attempt($data, true)) {
            return redirect(route("index"));
        }
        return redirect(route("profile"));
    }

    public function registration(Request $request)
    {
        $user = User::query()->make(array_merge($request->all(), ["id_role"=>2]));
        $user->save();
        return redirect(route("index"));
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function logout()
    {
        Auth::logout();

        return redirect(route("index"));
    }
}
