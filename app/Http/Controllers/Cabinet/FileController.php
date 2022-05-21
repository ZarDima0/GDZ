<?php

namespace App\Http\Controllers\Cabinet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\Storage;


class FileController extends Controller
{
    public function download($id) 
    {   
        $filePath = File::find($id);
        $path = Storage::disk('local')->path($filePath->path_file);
        return response()->download($path, basename($path));
    }

    public function destroy($id) 
    {
        $filePath = File::find($id);
        if($filePath) {
            $file = Storage::delete([$filePath->path_file]);
            $filePath->delete();
            return back()->withInput(['message' => 'удалено']);
        }
    }
}
