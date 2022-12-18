<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function loginPage(Request $request)
    {
        if (Auth::check()) {
            return redirect(route("admin.users"));
        }
        return view("admin.login");
    }

    public function login(Request $request)
    {
        $data = $request->only(["eamail", "password"]);
        $data["id_role"] = 1;
        if (!auth()->attempt($data, true)) {
            return redirect(route("admin.login"))->withErrors([
                "email" => "Неправильные данные"
            ]);
        }
        return redirect(route("admin.users"));
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route("index"));
    }
}
