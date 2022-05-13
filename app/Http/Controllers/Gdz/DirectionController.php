<?php

namespace App\Http\Controllers\Gdz;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Article;
use App\Models\Institute;
use App\Models\Direction;


class DirectionController extends Controller
{   
    
    public function index($instituteSlug)
    {
        $instituteId = Institute::where('slug','=',$instituteSlug)->first();
        $directionList = Direction::where('institute_id','=',$instituteId->id)->get();

        return view('direction-list',compact('directionList','instituteSlug'));
    }
}
