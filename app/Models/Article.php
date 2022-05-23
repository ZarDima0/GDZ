<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['article_name','teacher_id','direction_id','slug'];
    protected $table = 'article';
}
