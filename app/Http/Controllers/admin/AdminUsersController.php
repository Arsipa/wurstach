<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class AdminUsersController extends Controller
{
    public function index()
    {
        $paginate = User::query()->get();

        return view(
            "admin.users",
            compact("paginate"),
        );
    }
    
    public function user(Request $request, User $user)
    {
        $user->nickname = $request->get("title");
        $user->id_role = $request->get("role");
        $user->save();

        return 200;
    }
    
    public function createUser(Request $request)
    {
        $user = User::query()->make($request->only(["title", "id_role"]));

        return 200;
    }
    
    public function deleteUser(Request $request, User $user)
    {
        $user->delete();

        return 200;
    }
}
