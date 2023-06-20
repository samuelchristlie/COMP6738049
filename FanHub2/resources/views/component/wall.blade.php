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
			@if($profile->username === $user->username)
			<button class="btn btn-outline btn-primary absolute top-0 right-8">
			Edit Profile
			</button>
			@else
			<button class="btn btn-primary absolute top-0 right-8">
			Follow
			</button>
			@endif
			
			<h1 class="text-2xl font-bold">{{$profile->username}}</h1>
			<p class="">
				{{ "@".$profile->name }}
			</p>
			
		</div>
	</div>
	
	{{-- New Post --}}
	<div class="mb-5">
		
		<div class="card card-bordered border-gray-300 w-full shadow-lg py-4">
			<div class="mx-8 my-4">
				<div class="flex items-start">
					<img src="{{ $user->profilePicture }}" alt="Avatar" class="w-12 h-12 rounded-full mr-4">
					<div>
						<h3 class="font-bold">{{$user->username}}</h3>
						<p class="text-gray-600">{{ "@".$user->name }}</p>
					</div>
				</div>
			</div>


			<form action="/posts" method="POST" class="mx-8">
				@csrf
				<div class="mb-2">
					<textarea name="caption" id="caption" rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-lg outline-none focus:border-secondary" placeholder="Share your thoughts...">
						
					</textarea>
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
	
	{{-- Post --}}
	<div class="mb-5">
		
		<div class="card card-bordered border-gray-300 w-full shadow-lg pt-4 pb-2">
			{{-- Avatar --}}
			<div class="mx-8 mb-2">
				<div class="flex items-start">
					<img src="{{ $profile->profilePicture }}" alt="Avatar" class="w-12 h-12 rounded-full mr-4">
					<div>
						<h3 class="font-bold">{{$profile->username}}</h3>
						<p class="text-gray-600">{{ "@".$profile->name }}</p>
					</div>
				</div>
			</div>
			
			
			
			{{-- Caption --}}
			<div class="mx-8">
				<p class="">
					If a dog chews shoes whose shoes does he choose?
				</p>
				
			</div>
			
			{{-- Picture --}}
			<div class="h-72 mx-8 rounded-xl my-4">
				<figure class="w-full h-full bg-cover" style="background-image: url(images/image%2011.png);">
				</figure>
			</div>
			
			{{-- Action --}}
			<div class="px-8">
				<button class="mr-4">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
					<path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
				</svg>
				
				</button>
				
				<button class="">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
					<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 011.037-.443 48.282 48.282 0 005.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
				</svg>
				
				</button>
				
			</div>
			
		</div>
		
	</div>
	
	
	
	
</div>