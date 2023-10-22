<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'isbn',
        'title',
        'author',
        'image_path',
        'publisher',
        'category',
        'page',
        'language',
        'publish_date',
        'subjects',
        'desc'

    ];
    use HasFactory;
}
