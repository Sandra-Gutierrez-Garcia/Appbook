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
        'published_at',
        'writer_id'
    ];

    protected $casts = [
        'description' => 'text',
        'title' => 'string',
        'published_at' => 'datetime',
        'writer_id' => 'integer',
    ];

    public function writer()
    {
        return $this->belongsTo(Writer::class, 'writer_id');
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
