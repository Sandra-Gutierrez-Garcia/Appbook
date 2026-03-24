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
    ];

    protected $casts = [
        'name' => 'string',
    ];


    public function books()
    {
        return $this->belongsToMany(Book::class, 'genre_books');
    }

    public function genreBooks()
    {
        return $this->hasMany(GenreBook::class, 'genre_id');
    }


}
