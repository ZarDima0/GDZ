<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;


class UploadPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nameFile' => 'required|max:255',
            'instityte' => 'required',
            'direction' => 'required',
            'article' => 'required',
            'article_name' => 'max:255|unique:article',
            'file' => 'required|file|max:10000|mimes:doc,pdf,docx,zip',
        ];
    }
}
