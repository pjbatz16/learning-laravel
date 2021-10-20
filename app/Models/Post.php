<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;
use App\Models\User;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject',
        'user_id',
    ];

    public function comments() {
        return $this->hasMany(Comment::class, 'post_id', 'id'); 
    }

    public function user() {
        return $this->hasOne(User::class, 'id', 'user_id');  
    }
}
