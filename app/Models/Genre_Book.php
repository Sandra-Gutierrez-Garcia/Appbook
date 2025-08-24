<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre_Book extends Model
{
    use HasFactory;

    protected $table = 'genre_books';

    protected $fillable = [
        'genre_id',
        'book_id'
    ];

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }

    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }
}
