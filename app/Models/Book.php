<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $fillable = [
        'title',
        'description',
        'status',
        'writer_id'
    ];

    protected $casts = [
        'description' => 'string',
        'title' => 'string',
        'status' => 'string',
        'writer_id' => 'integer',
    ];

    public function writer()
    {
        return $this->belongsTo(Writer::class, 'writer_id');
    }

    public function chapters()
    {
        return $this->hasMany(Chapter::class, 'book_id');
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'genre_books');
    }

    public function likes()
    {
        return $this->hasMany(LikeBook::class, 'book_id');
    }

}
