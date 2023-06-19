<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'userId',
        'content',
        'parentPost',
        'postDate',
    ];

    protected $dates = [
        'postDate',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function parentPost()
    {
        return $this->belongsTo(Post::class, 'parentPost')->whereNotNull('parent_post');
    }

    public function replies()
    {
        return $this->hasMany(Post::class, 'parentPost');
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
