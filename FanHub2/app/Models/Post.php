<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Like;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'userId',
        'content',
        'picture',
        'parentPost',
        'exclusive',
        'postDate',

    ];

    protected $dates = [
        'postDate',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, "userId");
    }

    public function userLiked($user){
        return Like::where("userId", $user->id)->where("postId", $this->id)->exists();
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
        return $this->hasMany(Like::class, "userId");
    }

    public function likeCount()
    {
        return Like::where('postId', $this->id)->count();

    }

    public function replyCount()
    {   
        $count = 0;
        $replies = Post::where("parentPost", $this->id)->get();
        foreach ($replies as $reply){
            $count += 1 + $reply->replyCount();
        }

        return $count;
    }
}
