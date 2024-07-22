<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    /**
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'author',
        'year',
        'genre',
    ];

    /**
     *
     * @var array<string, string>
     */
    protected $casts = [
        'year' => 'integer',
    ];

}
