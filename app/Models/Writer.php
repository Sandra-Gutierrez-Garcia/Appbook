<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    use HasFactory;

    protected $table = 'writers';

    protected $fillable = [
        'username',
        'bio',
        'user_id'
    ];

    protected $casts = [
        'bio' => 'text',
        'username' => 'string',
    ];

    public function books()
    {
        return $this->hasMany(Book::class, 'writer_id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }


}
