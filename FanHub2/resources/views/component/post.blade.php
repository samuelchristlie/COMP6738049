{{-- Post --}}
<div class="mb-5">
	
	<div class="card card-bordered border-gray-300 w-full shadow-lg pt-4 pb-2">
		{{-- Avatar --}}
		<div class="mx-8 mb-2">
			<a href="/{{"@".$post->user->username}}">
				<div class="flex items-start">
					<img src="{{ $post->user->profilePicture }}" alt="Avatar" class="w-12 h-12 rounded-full mr-4">
					<div>
						<div class="flex">
							<h3 class="font-bold mr-1">{{$post->user->name}}</h3>
							@include('component.checkmark', ["size" => 5])
							
						</div>
						<p class="text-gray-600">{{ "@".$post->user->username }}</p>
					</div>
				</div>
			</a>
		</div>
		
		
		
		{{-- Caption --}}
		<div class="mx-8">
			<p class="">
				{{$post->content}}
			</p>
			
		</div>
		
		{{-- Picture --}}
		@if($post->picture)
		<div class="h-72 mx-8 my-4">
			<figure class="w-full h-full bg-cover rounded-xl" style="background-image: url({{ asset($post->picture) }});">
			</figure>
		</div>
		@else
		<span class="h-4">
			
		</span>
		@endif
		
		{{-- Action --}}
		<div class="px-8">
			<div class="flex">
				
				
				@if(isset($user))
				<button id="likeButton{{ $post->id }}" class="mr-4">
				<svg xmlns="http://www.w3.org/2000/svg" @if($post->userLiked($user))fill="currentColor"
					@else
					fill="none"
					@endif
					viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 @if($post->userLiked($user))text-primary @endif">
					<path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
				</svg>
				</button>
				@else
				<button disabled class="mr-4">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ">
					<path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
				</svg>
				</button>
				@endif
				
				
				
				@if(isset($user))
				<button class stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
					<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 011.037-.443 48.282 48.282 0 005.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
				</svg>
				
				</button>
				@else
				<button disabled class stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
					<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 011.037-.443 48.282 48.282 0 005.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
				</svg>
				
				</button>
				@endif
			</div>
			
		</div>
		
		@if(isset($user))
		<script>
		const button = document.querySelector('#likeButton{{ $post->id }}');
		const svgIcon = button.querySelector("svg");
		
		button.addEventListener('click', function(event) {
		event.preventDefault();
		
		const formData = new FormData();
		formData.append('_token', "{{ csrf_token() }}");
		formData.append('post', '{{ $post->id}}');
		
		fetch('/like-post', {
		method: 'POST',
		body: formData
		})
		.then(response => response.json())
		.then(data => {
		if (data.status === 'success') {
		svgIcon.classList.toggle("text-primary");
		
		if (svgIcon.getAttribute('fill') === 'none') {
		svgIcon.setAttribute('fill', 'currentColor');
		} else {
		svgIcon.setAttribute('fill', 'none');
		}
		}
		console.log(data);
		})
		.catch(error => {
		console.error(error);
		});
		});
		</script>
		@endif
		
	</div>
	
</div>