<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function rules()
    {
        return [
            'user_id' => ['required', 'exists:users'],
            'title' => ['required'],
            'slug' => ['required'],
            'body' => ['required'],
            'excerpt' => ['required'],
        ];
    }

    public function authorize()
    {
        return true;
    }
}
