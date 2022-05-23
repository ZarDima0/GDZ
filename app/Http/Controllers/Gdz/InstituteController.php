<?php

namespace App\Http\Controllers\Gdz;

use App\Http\Controllers\Controller;
use App\Models\Institute;

class InstituteController extends Controller
{
    public function index()
    {
        $instituteList = Institute::select(['nameInstitute', 'slug'])->get();
        return view('institute-list', compact('instituteList'));
    }
}
