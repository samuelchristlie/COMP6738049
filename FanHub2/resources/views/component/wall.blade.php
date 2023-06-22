<div class="min-h-screen pb-40 sm:mx-20 md:mx-32 lg:mx-72">
	<div class="rounded-2xl shadow-xl pb-8 mb-8">
		
		<div class="hero h-64 mb-16" style="background-image: url({{ $profile->coverPicture }});">
			<div class="hero-content h-full w-full relative ">
				
				<div class="avatar h-32 w-32 absolute left-8 -bottom-16">
					<div class=" rounded-full mx-auto ring-2 ring-white ring-offset-0">
						<img src="{{ $profile->profilePicture }}" />
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
				@include('component.checkmark', ["size" => 6])
				
			</div>
			<p class="">
				{{ "@".$profile->username }}
			</p>
			<p class="mt-3 mb-4">
				<span class="font-bold">300</span> Fans
			</p>
			
		</div>
		
		<div class="px-8">
			<button class="btn btn-primary w-full">
			Shop
			</button>
		</div>
		
	</div>
	
	{{-- New Post --}}
	@if(isset($user))
	<div class="mb-5">
		
		@if($errors->any())
		<div class="mb-5 alert alert-error">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
		
		<div class="card card-bordered border-gray-300 w-full shadow-lg py-4">
			<div class="mx-8 my-4">
				<div class="flex items-start">
					<img src="{{ $user->profilePicture }}" alt="Avatar" class="w-12 h-12 rounded-full mr-4">
					<div>
						<div class="flex">
							<h3 class="font-bold mr-1">{{$user->name}}</h3>
							@include('component.checkmark', ["size" => 5])
							
						</div>
						<p class="text-gray-600">{{ "@".$user->username }}</p>
					</div>
				</div>
			</div>
			
			{{-- Form --}}
			<form action="/new-post" method="POST" class="mx-8" enctype="multipart/form-data">
				@csrf
				<div class="mb-2">
					<textarea name="content" id="content" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-lg outline-none focus:border-secondary" placeholder="Share your thoughts...">@if($profile->username !== $user->username){{"@".$profile->username." "}}@endif</textarea>
				</div>
				<div class="mb-2">
					<input type="file" name="image" id="image" class="file-input file-input-sm">
				</div>
				<div class="flex justify-end">
					<button type="submit" class="btn btn-primary ">Post</button>
				</div>
			</form>
		</div>
		
	</div>
	@endif
	
	@foreach($profile->posts()->orderByDesc("postDate")->get() as $post)
	{{-- @include("component.post", ["post", $post]) --}}
	@include("component.post")
	@endforeach
	
	@if(isset($user))
	@php
		$uniqueUsers = compact("profile");
	@endphp
	<script>
		@foreach($uniqueUsers as $uniqueUser)
			var followUser{{$uniqueUser->id}}Buttons = document.querySelectorAll('.followUser{{$uniqueUser->id}}');;
			
			for (let i = 0; i < followUser{{$uniqueUser->id}}Buttons.length; i++) {
				@if(!$user->follows($uniqueUser))
				let isFollowingUser{{$uniqueUser->id}} = false;
				@else
				let isFollowingUser{{$uniqueUser->id}} = true;
				@endif
				
				followUser{{$uniqueUser->id}}Buttons[i].onclick = function(event) {
				event.preventDefault();
				
				const formDataFollowUser{{$uniqueUser->id}} = new FormData();
				formDataFollowUser{{$uniqueUser->id}}.append('_token', "{{ csrf_token() }}");
				formDataFollowUser{{$uniqueUser->id}}.append('artist', '{{ $uniqueUser->id}}');
				
				fetch('/follow', {
				method: 'POST',
				body: formDataFollowUser{{$uniqueUser->id}}
				})
				.then(response => response.json())
				.then(data => {
				if (data.status === 'success') {
					for (let j = 0; j < followUser{{$uniqueUser->id}}Buttons.length; j++) {
						followUser{{$uniqueUser->id}}Buttons[j].classList.toggle("btn-outline");
				
						if (isFollowingUser{{$uniqueUser->id}}) {
						followUser{{$uniqueUser->id}}Buttons[j].textContent = 'Follow';
						} else {
						followUser{{$uniqueUser->id}}Buttons[j].textContent = 'Unfollow';
						}
					}
				isFollowingUser{{$uniqueUser->id}} = !isFollowingUser{{$uniqueUser->id}};
		
				}
				// console.log(data);
				})
				.catch(error => {
				// console.error(error);
				});
				};
			}
		@endforeach
	</script>
	@endif
	
	
	
	
</div>