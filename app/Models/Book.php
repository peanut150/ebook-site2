<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model {

    protected $table = 'books';

    protected $fillable = [
        'book_id', 'title', 'author', 'genre'
    ];
    
    protected $primaryKey = 'book_id';
    public $timestamps = false;
}