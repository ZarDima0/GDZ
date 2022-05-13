<?php

namespace App\Http\Controllers\Gdz;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Institute;
use App\Models\Direction;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Http\Requests\UploadPostRequest;


class CreateFileController extends Controller
{
    public function index()
    {
        return response()->json([
            'instityteList' =>Institute::all(),
            'directionList' =>Direction::all(),
            'Article' =>Article::all(),
        ]);
    }

    public function create()
    {
        return view('create-file');
    }

    public function upload(UploadPostRequest $request)
    {
        $input = $request->all();

        $newArticle = $input['new-article'];
        $idArticle = $input['article'];

        if($newArticle) {
            $newArticle = Article::create([
                'article_name' => $input['new-article'],
                'direction_id'=> $input['direction'],
                'teacher_id' => 2,
                'slug' => Str::slug($input['new-article']),
            ]);
            if($newArticle->id) {
                $idArticle = $newArticle->id;
            }
        }if ($request->isMethod('post') && $request->file('file')) {
            $file = $request->file('file');
            $upload_folder = 'public/folder';
            $filename = $file->getClientOriginalName(); // image.jpg
            $link = Storage::putFileAs($upload_folder, $file, $filename);
            
            $newFile = File::create([
                'nameFile' => $input['nameFile'],
                'id_direction' => $input['direction'],
                'path_file' => $link,
                'article_id' => $idArticle,
                'id_teacher' => 2,
                'user_id' => Auth::user()->id,
            ]);
            return redirect(route('create.file'))->with('success', 'Файл добавлен');
        }
    }
}


