<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Review;

class Book extends Model
{
    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
