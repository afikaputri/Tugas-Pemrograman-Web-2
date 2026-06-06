<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Category;

class Movie extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'category_id',
        'title',
        'director',
        'release_year',
        'duration',
        'rating',
        'synopsis',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}