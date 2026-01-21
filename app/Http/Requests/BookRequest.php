<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        if ($this->isMethod('post')) {
            return [
                'title' => 'required|string|max:255',
                'writer_id' => 'required|exists:writers,id',
                'description' => 'required|string',
                'status' => 'required|in:finished,starting,paused,abandoned',
            ];
        }
        
        if ($this->isMethod('put')) {
            return [
                'title' => 'sometimes|string|max:255',
                'description' => 'sometimes|string',
                'status' => 'sometimes|in:finished,starting,paused,abandoned',
            ];
        }

        return [];
    }

    
}
