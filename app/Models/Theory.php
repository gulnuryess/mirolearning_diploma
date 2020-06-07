<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Theory extends Model
{
    public $timestamps = false;
    protected $table = 'topic_theory';
    protected $fillable = ['topic_id', 'text'];
}
