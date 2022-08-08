<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    public function getUserRelation()
    {
        return $this->belongsT0(User::class);
    }


    public function getCommentRelation()
    {
        return $this->hasMany(Comment::class);
    }


    public function getCategoryRelation()
    {
        return $this->belongsTo(Category::class);
    }
}