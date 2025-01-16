<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReactionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'user_id' => ['required', 'exists:users'],
            'type' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
