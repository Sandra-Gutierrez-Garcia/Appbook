<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChapterRequest extends FormRequest
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
     */
    public function rules(): array
    {
        if($this->isMethod('post')){
            return [
                'chapter_number' => 'requiered|integer|min:1',
                'title' => 'required|string|max:255',
                'content_type' => 'required|in:text,pdf',
                'content' => 'required_if:content_type,text|string',
                'pdf_path' => 'required_if:content_type,pdf|file|mimes:pdf|max:20480',
                'book_id' => 'required|exists:books,id',

            ];
          
        }

          if($this->isMethod('put')){
                return [
                    'chapter_number' => 'sometimes|integer|min:1',
                    'title' => 'sometimes|string|max:255',
                    'content_type' => 'sometimes|in:text,pdf',
                    'content' => 'sometimes|required_if:content_type,text|string',
                    'pdf_path' => 'sometimes|required_if:content_type,pdf|file|mimes:pdf|max:20480',
                ];
            }

        return [];
    }
}
