<?php

namespace App\Http\Controllers\Gdz;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Institute;

class InstituteController extends Controller
{
    public function index() 
    {
        $instituteList = Institute::all();
        return view('institute-list',compact('instituteList'));
    }
}
