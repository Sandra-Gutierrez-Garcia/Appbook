<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikeBook extends Model
{
    use HasFactory;

    protected $table = 'like_books';

    protected $fillable = [
        'user_id',
        'book_id'
    ];

    protected $casts = [
        'user_id' => 'integer',
        'book_id' => 'integer',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }
}
