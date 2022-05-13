<?php

namespace App\Http\Controllers\Gdz;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Direction;
use App\Models\Article;

class ArticleController extends Controller
{
    function index($instituteSlug,$directionSlug) 
    {
        $directionId = Direction::where('slug','=',$directionSlug)->first();
        $articleList = Article::where('direction_id','=',$directionId->id)->get();
        return view('article',compact('articleList','instituteSlug','directionSlug'));
    }
}
