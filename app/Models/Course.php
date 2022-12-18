<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_course';
    protected $table = "courses";


    public function lessonsCount()
    {
        return $this->lessons()->get()->count();
    }
    public function lessons()
    {
        return $this->hasMany(Lesson::class, "id_course", "id_course");
    }
    public function author()
    {
        return $this->hasOne(Author::class, "id_author", "id_author");
    }
    public function getAuthor()
    {
        return $this->hasOne(Author::class, "id_author", "id_author")->get();
    }

}
