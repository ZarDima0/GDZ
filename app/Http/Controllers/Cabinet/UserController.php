<?php

namespace App\Http\Controllers\Cabinet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\File;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $userData = Auth::user();
        $fileList = File::where('user_id', '=', $userData->id)->get();
        return view('cabinet.index',compact('userData','fileList'));
    }

    public function edit($id) 
    {
        $user = User::find($id);
        return view('cabinet.update-user',compact('user'));
    }

    public function update(Request $request)
    {  
        $user = Auth::user()->id;
        $userFind = User::find($user);

        $data = $request->name;
        
        if(empty($userFind)) {
            return back()->withErrors(['msg' => 'Пользователь не найден']);
        }

        $userFind->name = $request->name;
        $userFind->email = $request->email;
        $userFind->save();
        if($userFind) {
            return redirect()->route('cabinet.index')->with(['updateUser' => 'Данные сохранены']);
        }else {
            return back()->withErrors(['msg' => 'Ошибка сохранения']);
        }
    }
}
