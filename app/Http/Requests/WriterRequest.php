<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WriterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'username' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'user_id' => 'required|exists:users,id'
        ];
    }

    public function messages(){
        return[
            'username.required'=>'the username is required',
            'user_id.exists'=>'the user must exist'
        ];
    }
}
