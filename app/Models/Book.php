<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title' ,
        'author',
        'category_id',
        'published_year'

    ];

    public function Category()
    {
       return $this->belongsTo(Category::class);
    }
}
