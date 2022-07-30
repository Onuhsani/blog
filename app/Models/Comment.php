<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function getUserComment()
    {
        return $this->belongsTo(User::class);
    }

    
    public function getPostComment()
    {
        return $this->belongsTo(Post::class);
    }
}
