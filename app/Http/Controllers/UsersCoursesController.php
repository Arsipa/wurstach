<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\UserCourse;
use Database\Factories\UserFactory;

class UsersCoursesController extends Controller
{
    public function index()
    {
        $usersCourses = UserCourse::query()->where("id_user",auth()->user()->id_user)->get();
        $courses = collect();

        foreach ($usersCourses as $key => $course) {
            $courses = $courses->merge($course->courses()->get());
        }
        return view(
            "profile",
            compact("courses"),
        );
    }
}
