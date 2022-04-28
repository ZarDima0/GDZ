<?php

namespace App\Http\Controllers\Gdz;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Direction;

class HomeController extends Controller
{
    public function index () 
    {
        $listInstitute = DB::table('institute')->get();
        return view('institute-list', compact('listInstitute'));
    }
    
    public function create ($slug) 
    {
        $institutSlug = DB::table('institute')->where('slug', $slug)->first();
        $direction = Direction::where('institute_id', '=', $institutSlug->id)->get();

        return view('direction-list',compact('institutSlug','direction'));
    }
}