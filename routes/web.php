<?php

use App\Http\Controllers\UsersCoursesController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\FacultiesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminUsersController;
use App\Http\Controllers\Admin\AdminFacultiesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Models\Course;
use App\Models\UserCourse;
use App\Models\Faculties;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [FacultiesController::class, "index"])->name("index");

Route::get('/catalog', [CatalogController::class, "index"])->name("catalog");


Route::get('/course/{course:id_course}', function (Course $course) {
    return view('course', compact('course'));
})->name("course");

Route::get('/profile', [UsersCoursesController::class, "index"])->middleware("auth")->name("profile");

Route::get('/about', function () {
    return view('about');
})->name("about");

Route::get('/lesson', function () {
    return view('lesson');
})->name("lesson");

Route::get('/add_video', function () {
    return view('add_video');
})->name("add_video");

Route::get('/videoByTime', function () {
    return response()->json(["message" => "success", "response" => Lesson::all(["video_src", "updated_at"])->sortByDesc("updated_at")->values()->all()], 200);
});

Route::get('/courses_in_faculty/{faculty_id}', function (int $faculty_id) {
    return response()->json([
        "message" => "success", 
        "response" => Course::query()->where("faculty_id", $faculty_id)->get()
    ], 200);
});

Route::get('/buy_course/{course_id}', function (int $course_id) {
    return response()->json(["message" => "success", "response" => UserCourse::query()->where("course_id", $course_id)
        ->whereBetween("created_at", [Carbon::now()->addDays(-7), Carbon::now()])->get()], 200);
});

Route::get('/courses_by_price/{faculty_id}', function (int $faculty_id, Request $request) {
    return response()->json(["message" => "success", "response" => Course::query()
        ->where("faculty_id", $faculty_id)->where("price", ">=", $request->input("min"))
        ->where("price", "<=", $request->input("max"))->get()], 200);
});

Route::get('/search_faculty', function (Request $request) {
    $faculty_list = Faculties::query()->where("name", "like", "%" . $request->input("name") . "%")->get();
    return response()->json(["message" => "success", "response" => ["items" => $faculty_list, "coutnt" => $faculty_list->count()]], 200);
});

Route::get('/login', [AuthController::class, "login"])->name("login");
Route::get('/registration', [AuthController::class, "registration"])->name("registration");
Route::get('/logout', [AuthController::class, "logout"])->name("logout");

Route::post('/add_video_action', function (Request $request) {
    $lesson = Lesson::query()->where("id", $request->input("id"))->first();
    $lesson->video_src = Storage::putFile("/", $request->file("video_src"));
    $lesson->save();
    return redirect(route("lesson"));
})->name("add_video_action");

Route::prefix("administration")->name("admin.")->group(function () {
    Route::get('/login', [AdminAuthController::class, "loginPage"])->name("login.page")->middleware("guest");
    Route::post('/login', [AdminAuthController::class, "login"])->name("login")->middleware("guest");
    Route::get('/logout', [AdminAuthController::class, "logout"])->name("logout")->middleware("auth");

    Route::middleware("auth")->group(function () {
        Route::get('/users', [AdminUsersController::class, "index"])->name("users");
        Route::get('/faculties', [AdminFacultiesController::class, "index"])->name("faculties");


        Route::post('/api/user', [AdminUsersController::class, "createUser"]);
        Route::put('/api/user/{user}', [AdminUsersController::class, "user"]);
        Route::delete('/api/user/{user}', [AdminUsersController::class, "deleteUser"]);
    });
});
