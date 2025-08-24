<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $table = 'genres';

    protected $fillable = [
        'name',
        'description'
    ];

    public function books()
    {
        return $this->belongsToMany(Book::class, 'genre_books');
    }

    public function genreBooks()
    {
        return $this->hasMany(Genre_Book::class, 'genre_id');
    }


}
