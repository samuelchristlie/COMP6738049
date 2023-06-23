<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class User extends Model
{
	use HasFactory;

	protected $fillable = [
		'name',
		'email',
		'username',
		'password',
		'role',
		'verify',
		'address',
		'profilePicture',
		'coverPicture',
		// 'googleId',
		'lastNotif',
		'session',
	];

	public function isArtist()
	{
		return $this->role === "Artist" && $this->verify;
	}

	public function isUnverifiedArtist()
	{
		return $this->role === "Artist" && !$this->verify;
	}

	// public function isActiveMember()
	// {
		
	// }

	public function transactions()
	{
		return $this->hasMany(Transaction::class, 'userId');
	}

	public function membership()
	{
		return $this->hasMany(Membership::class, 'userId');
	}

	public function posts()
	{
		return $this->hasMany(Post::class, 'userId');
	}

	public function likes()
	{
		return $this->hasMany(Like::class, 'userId');
	}

	public function chatsWith()
	{
		$chatsFrom = Chat::where('from', $this->id)->pluck('to')->toArray();
		$chatsTo = Chat::where('to', $this->id)->pluck('from')->toArray();
		$chats = array_unique(array_merge($chatsFrom, $chatsTo));
		return User::whereIn('id', $chats)->get();
	}

	public function chatHistory(User $otherUser)
	{
		return Chat::where(function ($query) use ($otherUser) {
				$query->where('from', $this->id)
					  ->where('to', $otherUser->id);
			})
			->orWhere(function ($query) use ($otherUser) {
				$query->where('from', $otherUser->id)
					  ->where('to', $this->id);
			})
			->orderBy('sentDate')
			->get();
	}

	/*public function sentChats()
	{
		return $this->hasMany(Chat::class, 'from');
	}

	public function receivedChats()
	{
		return $this->hasMany(Chat::class, 'to');
	}*/

	public function followings()
	{
		return $this->hasMany(Follow::class, 'userId');
	}

	public function followers()
	{
		return $this->hasMany(Follow::class, 'artistId');
	}

	public function follows(User $artist)
	{
		$follow = Follow::where("userId", $this->id)->where("artistId", $artist->id)->first();
		if($follow){
			return true;
		} else {
			return false;
		}

	}

	public function products()
	{
		return $this->hasMany(Product::class, 'userId');
	}

	public function followersCount(){
        return Follow::where('artistId', $this->id)->count();
    }

    public function totalPurchase(){
    	return Transaction::where('userId', $this->id)->count();
    }

    public function totalBought(){
    	return Transaction::where('userId', $this->id)->sum("quantity");
    }

    public function totalSpent(){
		return Transaction::where('userId', $this->id)->sum("price") + $this->totalPurchase() * 15000;
    }
}
