<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;

    protected $table = 'chapters';

    protected $fillable = [
        'book_id',
        'title',
        'chapter_number',
        'content_type',
        'content',
        'pdf_path'
    ];

    protected $casts = [
        'book_id' => 'integer',
        'chapter_number' => 'integer',
        'content_type' => 'string',
        'content' => 'string',
        'pdf_path' => 'string',
        'title' => 'string',
    ];

    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }
}
