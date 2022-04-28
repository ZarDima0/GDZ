<?php

namespace App\Http\Controllers\Gdz;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Article;

class DirectionController extends Controller
{
    public function index($slug,$slugArticle)
    {

        $slugArticle = DB::table('direction')->where('slug', $slugArticle)->first();

        $articleList = Article::where('direction_id', '=', $slugArticle->id)->get();
        return view('article',compact('articleList'));
    }
    
    public function create () {
        
    
    }
}
