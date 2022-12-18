<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_author';
    protected $table = "authors";

    public function user()
    {
        return $this->hasOne(User::class, "id_user", "id_user");
    }
}
