<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculties extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_faculty';
    protected $table = "faculties";

    public function coursesCount()
    {
        return $this->courses()->get()->count();
    }
    public function courses()
    {
        return $this->hasMany(Course::class, "id_faculty", "id_faculty");
    }
    public function getCourses()
    {
        return $this->hasMany(Course::class, "id_faculty", "id_faculty")->get();
    }
}
