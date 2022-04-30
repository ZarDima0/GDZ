<?php

namespace App\Http\Controllers\Gdz;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Institute;
use App\Models\Direction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CreateFileController extends Controller
{
    public function index()
    {
        return response()->json([
            'instityteList' => Institute::all(),
            'directionList' => Direction::all(),
        ]);
    }

    public function create()
    {
        $instityteList = Institute::all();
        $directionList = Direction::all();
        $articleList = Article::all();
        return view('create-file', compact('instityteList', 'directionList', 'articleList'));
    }

    public function upload(Request $request)
    {
        if ($request->isMethod('post') && $request->file('file')) {
            $file = $request->file('file');
            $upload_folder = 'public/folder';
            $filename = $file->getClientOriginalName(); // image.jpg
            Storage::putFileAs($upload_folder, $file, $filename);
        }
    }
}
