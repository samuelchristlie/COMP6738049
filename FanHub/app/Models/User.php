<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'first_name',
        'last_name',
        'password',
        'role',
        'address',
        'profile_picture',
        'session',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    //     'password' => 'hashed',
    // ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function membership()
    {
        return $this->hasMany(Membership::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function sentChats()
    {
        return $this->hasMany(Chat::class, 'from');
    }

    public function receivedChats()
    {
        return $this->hasMany(Chat::class, 'to');
    }

    public function followings()
    {
        return $this->hasMany(Following::class, 'user_id');
    }

    public function followers()
    {
        return $this->hasMany(Following::class, 'artist_id');
    }
}
