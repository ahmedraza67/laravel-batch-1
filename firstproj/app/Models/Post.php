<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];



    public function tag()
    {
        return $this->belongsToMany(Tag::class);
    }
}
