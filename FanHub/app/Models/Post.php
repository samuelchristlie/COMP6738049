<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'content',
        'parent_post',
        'post_date',
    ];

    protected $dates = [
        'post_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function parentPost()
    {
        return $this->belongsTo(Post::class, 'parent_post')->whereNotNull('parent_post');;
    }

    public function replies()
    {
        return $this->hasMany(Post::class, 'parent_post');
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
