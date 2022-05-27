<?php

namespace App\Http\Controllers\Gdz;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\File;
use Illuminate\Support\Facades\Storage;

class FileGdzController extends Controller
{
    public function index($instituteSlug, $directionSlug, $articleSlug)
    {
        $articleId = Article::where('slug', '=', $articleSlug)->first();
        $fileList = File::where('article_id', '=', $articleId->id)->get();

        return view('file-list', compact('fileList'));
    }
}
