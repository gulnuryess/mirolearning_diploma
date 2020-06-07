<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MyCourse extends Model
{
    protected $table = 'my_courses';
    protected $fillable = ['user_id', 'course_id'];
}
