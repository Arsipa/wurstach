<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCourse extends Model
{
    use HasFactory;

    protected $table = "users_courses";
    protected $primaryKey = "id_users_courses";

    public function courses()
    {
        return $this->belongsTo(Course::class, "id_course", "id_course");
    }
}
