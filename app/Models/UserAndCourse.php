<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAndCourse extends Model
{
    use HasFactory;

    protected $table = 'users_courses';
}
