<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    public $timestamps = false;

    protected $table = 'topic_file';
    protected $fillable = ['topic_id', 'file_name'];
}
