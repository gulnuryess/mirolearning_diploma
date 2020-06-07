<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PassedQuiz extends Model
{
    protected $table = 'passed_quiz';
    protected $fillable = ['topic_id', 'topic_quiz_id', 'user_id', 'is_correct'];
}
