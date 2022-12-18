<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Faculties;
use App\Models\Course;
use Illuminate\Support\Facades\DB;

class FacultiesController extends Controller
{
    public function index()
    {
        $faculties = Faculties::query()->limit(3)->get();
        $courses = Course::query()->where("price", null)->limit(3)->get();

        return view(
            "index",
            compact("faculties", "courses"),
        );
    }
}
