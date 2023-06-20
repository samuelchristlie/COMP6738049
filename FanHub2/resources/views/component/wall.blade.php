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
			
			<div class="flex">
				<h1 class="text-2xl font-bold mr-1">
				{{$profile->username}}
				</h1>

				@if($profile->isArtist())
				<div class="relative tooltip w-6" data-tip="Unverified">
					<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="none" class="text-pink-300 w-6 h-6 absolute bottom-px">
						<path d="M20.396 11c-.018-.646-.215-1.275-.57-1.816-.354-.54-.852-.972-1.438-1.246.223-.607.27-1.264.14-1.897-.131-.634-.437-1.218-.882-1.687-.47-.445-1.053-.75-1.687-.882-.633-.13-1.29-.083-1.897.14-.273-.587-.704-1.086-1.245-1.44S11.647 1.62 11 1.604c-.646.017-1.273.213-1.813.568s-.969.854-1.24 1.44c-.608-.223-1.267-.272-1.902-.14-.635.13-1.22.436-1.69.882-.445.47-.749 1.055-.878 1.688-.13.633-.08 1.29.144 1.896-.587.274-1.087.705-1.443 1.245-.356.54-.555 1.17-.574 1.817.02.647.218 1.276.574 1.817.356.54.856.972 1.443 1.245-.224.606-.274 1.263-.144 1.896.13.634.433 1.218.877 1.688.47.443 1.054.747 1.687.878.633.132 1.29.084 1.897-.136.274.586.705 1.084 1.246 1.439.54.354 1.17.551 1.816.569.647-.016 1.276-.213 1.817-.567s.972-.854 1.245-1.44c.604.239 1.266.296 1.903.164.636-.132 1.22-.447 1.68-.907.46-.46.776-1.044.908-1.681s.075-1.299-.165-1.903c.586-.274 1.084-.705 1.439-1.246.354-.54.551-1.17.569-1.816zM9.662 14.85l-3.429-3.428 1.293-1.302 2.072 2.072 4.4-4.794 1.347 1.246z">
						</path>
					</svg>
				</div><div></div>
				@elseif($profile->isUnverifiedArtist())
				<div class="relative tooltip w-6" data-tip="Verified">
					<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="none" class="text-primary w-6 h-6 absolute bottom-px">
						<path d="M20.396 11c-.018-.646-.215-1.275-.57-1.816-.354-.54-.852-.972-1.438-1.246.223-.607.27-1.264.14-1.897-.131-.634-.437-1.218-.882-1.687-.47-.445-1.053-.75-1.687-.882-.633-.13-1.29-.083-1.897.14-.273-.587-.704-1.086-1.245-1.44S11.647 1.62 11 1.604c-.646.017-1.273.213-1.813.568s-.969.854-1.24 1.44c-.608-.223-1.267-.272-1.902-.14-.635.13-1.22.436-1.69.882-.445.47-.749 1.055-.878 1.688-.13.633-.08 1.29.144 1.896-.587.274-1.087.705-1.443 1.245-.356.54-.555 1.17-.574 1.817.02.647.218 1.276.574 1.817.356.54.856.972 1.443 1.245-.224.606-.274 1.263-.144 1.896.13.634.433 1.218.877 1.688.47.443 1.054.747 1.687.878.633.132 1.29.084 1.897-.136.274.586.705 1.084 1.246 1.439.54.354 1.17.551 1.816.569.647-.016 1.276-.213 1.817-.567s.972-.854 1.245-1.44c.604.239 1.266.296 1.903.164.636-.132 1.22-.447 1.68-.907.46-.46.776-1.044.908-1.681s.075-1.299-.165-1.903c.586-.274 1.084-.705 1.439-1.246.354-.54.551-1.17.569-1.816zM9.662 14.85l-3.429-3.428 1.293-1.302 2.072 2.072 4.4-4.794 1.347 1.246z">
						</path>
					</svg>
				</div><div></div>
				@endif

				<div class="relative tooltip w-6 tooltip-warning" data-tip="Premium">
					<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="none" class="text-warning w-6 h-6 absolute bottom-px">
						<path d="M20.396 11c-.018-.646-.215-1.275-.57-1.816-.354-.54-.852-.972-1.438-1.246.223-.607.27-1.264.14-1.897-.131-.634-.437-1.218-.882-1.687-.47-.445-1.053-.75-1.687-.882-.633-.13-1.29-.083-1.897.14-.273-.587-.704-1.086-1.245-1.44S11.647 1.62 11 1.604c-.646.017-1.273.213-1.813.568s-.969.854-1.24 1.44c-.608-.223-1.267-.272-1.902-.14-.635.13-1.22.436-1.69.882-.445.47-.749 1.055-.878 1.688-.13.633-.08 1.29.144 1.896-.587.274-1.087.705-1.443 1.245-.356.54-.555 1.17-.574 1.817.02.647.218 1.276.574 1.817.356.54.856.972 1.443 1.245-.224.606-.274 1.263-.144 1.896.13.634.433 1.218.877 1.688.47.443 1.054.747 1.687.878.633.132 1.29.084 1.897-.136.274.586.705 1.084 1.246 1.439.54.354 1.17.551 1.816.569.647-.016 1.276-.213 1.817-.567s.972-.854 1.245-1.44c.604.239 1.266.296 1.903.164.636-.132 1.22-.447 1.68-.907.46-.46.776-1.044.908-1.681s.075-1.299-.165-1.903c.586-.274 1.084-.705 1.439-1.246.354-.54.551-1.17.569-1.816zM9.662 14.85l-3.429-3.428 1.293-1.302 2.072 2.072 4.4-4.794 1.347 1.246z">
						</path>
					</svg>
				</div><div></div>
			</div>
			<p class="">
				{{ "@".$profile->name }}
			</p>
			
		</div>
	</div>
	
	{{-- New Post --}}
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
						<h3 class="font-bold">{{$user->username}}</h3>
						<p class="text-gray-600">{{ "@".$user->name }}</p>
					</div>
				</div>
			</div>
			
			{{-- Form --}}
			<form action="/new-post" method="POST" class="mx-8" enctype="multipart/form-data">
				@csrf
				<div class="mb-2">
					<textarea name="content" id="content" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-lg outline-none focus:border-secondary" placeholder="Share your thoughts...">@if(isset($tagUser)){{"@".$tagUser}}@endif</textarea>
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
	
@foreach($profile->posts()->get() as $post)
{{-- @include("component.post", ["post", $post]) --}}
@include("component.post")
@endforeach
	
	
	
	
</div>