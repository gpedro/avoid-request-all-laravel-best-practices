<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{

    protected $fillable = ['title', 'description', 'published'];

    public function scopePublished($query) {
        $query->where('published', '=', true);
    }

}
