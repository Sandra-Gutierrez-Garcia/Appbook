<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WriterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        if ($this->isMethod('post')) {
            return [
                'username' => 'required|string|max:255|unique:writers,username',
                'description' => 'required|text|max:1000',
                'user_id' => 'required|exists:users,id',
            ];
        } elseif ($this->isMethod('put') || $this->isMethod('patch')) {
            return [
                'username' => 'required|string|max:255|unique:writers,username,' . $this->route('id'),
                'description' => 'required|text|max:1000',
            ];
        }

        return [];
    }
}
