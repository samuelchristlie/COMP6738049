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
		return $this->hasMany(Following::class, 'userId');
	}

	public function followers()
	{
		return $this->hasMany(Following::class, 'artistId');
	}

	public function products()
	{
		return $this->hasMany(Product::class, 'userId');
	}
}
