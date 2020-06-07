<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $table = 'topic_quiz';
    protected $fillable = ['type', 'topic_id', 'question', 'correct', 'A', 'B', 'C', 'D'];
}
