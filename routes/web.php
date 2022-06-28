<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Models\Course;
use App\Models\User_Course;
use App\Models\Faculty;
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

Route::get('/', function () {
    return view('index');
})->name("index");

Route::get('/catalog', function () {
    return view('catalog');
})->name("catalog");

Route::get('/course', function () {
    return view('course');
})->name("course");

Route::get('/profile', function () {
    return view('profile');
})->middleware("auth")->name("profile");

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
    return response()->json(["message" => "success", "response" => Course::query()->where("faculty_id", $faculty_id)->get()], 200);
});

Route::get('/buy_course/{course_id}', function (int $course_id) {
    return response()->json(["message" => "success", "response" => User_Course::query()->where("course_id", $course_id)
        ->whereBetween("created_at", [Carbon::now()->addDays(-7), Carbon::now()])->get()], 200);
});

Route::get('/courses_by_price/{faculty_id}', function (int $faculty_id, Request $request) {
    return response()->json(["message" => "success", "response" => Course::query()
        ->where("faculty_id", $faculty_id)->where("price", ">=", $request->input("min"))
        ->where("price", "<=", $request->input("max"))->get()], 200);
});

Route::get('/search_faculty', function (Request $request) {
    $faculty_list = Faculty::query()->where("name", "like", "%" . $request->input("name") . "%")->get();
    return response()->json(["message" => "success", "response" => ["items" => $faculty_list, "coutnt" => $faculty_list->count()]], 200);
});

Route::get('/registration', function (Request $request) {
    $user = User::create(["name" => $request->input("name"), "password" => $request->input("password"), "email" => $request->input("email")]);
    $user->save();
    auth()->login($user);
    return Redirect::To(route("profile"));
})->name("registration");

Route::get('/login', function (Request $request) {
    $data = $request->only(["email", "password"]);
    if (!auth()->attempt($data)) {
        return redirect(route("index"))->withErrors([
            "login" => "Неправильные данные"
        ]);
    }
    return redirect(route("profile"));
})->name("login");

Route::get('/logout', function (Request $request) {
    auth()->logout();
    return redirect(route("index"));
})->name("logout");

Route::post('/add_video_action', function (Request $request) {
    $lesson = Lesson::query()->where("id", $request->input("id"))->first();
    $lesson->video_src = Storage::putFile("/", $request->file("video_src"));
    $lesson->save();
    return redirect(route("lesson"));
})->name("add_video_action");
