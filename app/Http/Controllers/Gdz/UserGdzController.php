<?php

namespace App\Http\Controllers\Gdz;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserGdzController extends Controller
{
    /**
     * Метод для отображения определенного пользователя
    */
    function create($id) 
    {
        $userData = User::find($id);
        if($userData) {
            return view('user-page',compact('userData'));
        }else {
            abort('404');
        }
    }
}
