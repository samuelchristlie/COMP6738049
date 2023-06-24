<div class="rounded-2xl shadow-xl pb-8 mb-8">
	
	<div class="hero h-64 mb-16" style="background-image: url({{ url($profile->coverPicture) }});">
		<div class="hero-content h-full w-full relative ">
			
			<div class="avatar h-32 w-32 absolute left-8 -bottom-16">
				<div class=" rounded-full mx-auto ring-2 ring-white ring-offset-0">
					<img src="{{ url($profile->profilePicture) }}" />
				</div>
			</div>
			
		</div>
	</div>
	
	
	<div class="px-8 relative">
		@if(isset($user))
		
		@if($profile->username === $user->username)
		<a href="/edit-profile">
			<button class="btn btn-outline btn-primary absolute top-0 right-8">
			Edit Profile
			</button>
		</a>
		@else
		
		@if(!$user->follows($profile))
		<button class=" absolute top-0 right-8 btn btn-primary followUser{{$profile->id}}">
		Follow
		</button>
		@else
		<button class=" absolute top-0 right-8 btn btn-primary btn-outline followUser{{$profile->id}}">
		Unfollow
		</button>
		@endif
		
		@endif
		
		@endif
		
		<div class="flex">
			<h1 class="text-2xl font-bold mr-1">
			{{$profile->name}}
			</h1>
			@include('component.checkmark', ["size" => 6, "user"=>$profile])
			
		</div>
		<p class="">
			{{ "@".$profile->username }}
		</p>
		<p class="mt-3 mb-4">
			<span class="font-bold">{{$profile->followersCount()}}</span> Fans
		</p>
		
	</div>
	
	@if($profile->isArtist())
	<div class="px-8">
		<a href="/shop/{{"@".$profile->username}}">
			<button class="btn btn-primary w-full">
			Shop
			</button>
		</a>
		
	</div>
	@endif
	
</div>