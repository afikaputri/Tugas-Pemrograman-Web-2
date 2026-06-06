<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Category;

class Movie extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'director',
        'release_year',
        'duration',
        'genre',
        'rating',
        'synopsis',
        'poster'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}