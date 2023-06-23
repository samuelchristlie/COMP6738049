{{-- Mentions --}}
@php
$pattern = '/@([a-zA-Z0-9_\.]+)/';

use App\Models\User;
use Carbon\Carbon;

$postContent = preg_replace_callback($pattern, function($matches) {
$username = $matches[1];
$postUser = User::where("username", $username)->first();

if ($postUser) {
return '<a class="text-blue-600" href="' . url("/@".$username) . '">@' . $username . '</a>';
} else {
return '@' . $username;
}
}, $post->content);

@endphp

{{-- Post --}}
<div class="mb-5">
	
	<div class="card card-bordered border-gray-300 w-full shadow-lg pt-4 pb-2">
		{{-- Avatar --}}
		<div class="mx-8 mb-2">
			
			<div class="flex items-start">
				<a href="/{{"@".$post->user->username}}">
					<img src="{{ $post->user->profilePicture }}" alt="Avatar" class="w-12 h-12 rounded-full mr-4">
					<div class="relative w-full">
						<div class="flex">
							<h3 class="font-bold mr-1">{{$post->user->name}}</h3>
							@include('component.checkmark', ["size" => 5, "user"=>$post->user])
							
						</div>
						<p class="text-gray-600">{{ "@".$post->user->username }}</p>
					</a>
					
					<div class="absolute top-0 right-0 ">
						<span class="text-gray-600">
							{{Carbon::parse($post->postDate)->diffForHumans()}}
						</span>
						@if(isset($user))
						@if($user->username !== $post->user->username)
						
						
						
						
						
						@if(!$user->follows($post->user))
						<button class="ml-2 btn btn-sm btn-primary followUser{{$post->user->id}}">
						Follow
						</button>
						@else
						<button class="ml-2 btn btn-outline btn-sm btn-primary followUser{{$post->user->id}}">
						Unfollow
						</button>
						@endif
						
						
						
						@endif
						@endif
						
					</div>
				</div>
			</div>
			
		</div>
		
		
		
		{{-- Caption --}}
		<div class="mx-8">
			<p class="">
				{{-- {{$post->content}} --}}
				{!! $postContent !!}
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
				
				<div class="flex mr-4">
					@if(isset($user))
					
					<button id="likeButton{{ $post->id }}" class="mr-1">
					<svg xmlns="http://www.w3.org/2000/svg" @if($post->userLiked($user))fill="currentColor"
						@else
						fill="none"
						@endif
						viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 @if($post->userLiked($user))text-primary @endif">
						<path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
					</svg>
					</button>
					@else
					<button disabled class="mr-1">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ">
						<path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
					</svg>
					</button>
					@endif
					<span class="text-gray-500">{{ number_format($post->likeCount()) }}</span>
				</div>
				
				
				<div class="flex">
					@if(isset($user))
					<button class="mr-1">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
						<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 011.037-.443 48.282 48.282 0 005.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
					</svg>
					
					
					</button>
					@else
					<button disabled class="mr-1">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
						<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 011.037-.443 48.282 48.282 0 005.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
					</svg>
					
					</button>
					@endif
					<span class="text-gray-500">{{ number_format($post->replyCount()) }}</span>
				</div>
			</div>
			
		</div>
		
		@if(isset($user))
		<script>
			const likeButton{{ $post->id }} = document.querySelector('#likeButton{{ $post->id }}');
			const svgIcon{{ $post->id }} = likeButton{{ $post->id }}.querySelector("svg");
			
			likeButton{{ $post->id }}.addEventListener('click', function(event) {
			event.preventDefault();
			
			const formData{{ $post->id }} = new FormData();
			formData{{ $post->id }}.append('_token', "{{ csrf_token() }}");
			formData{{ $post->id }}.append('post', '{{ $post->id}}');
			
			fetch('/like-post', {
			method: 'POST',
			body: formData{{ $post->id }}
			})
			.then(response => response.json())
			.then(data => {
			if (data.status === 'success') {
			svgIcon{{ $post->id }}.classList.toggle("text-primary");
			
			if (svgIcon{{ $post->id }}.getAttribute('fill') === 'none') {
			svgIcon{{ $post->id }}.setAttribute('fill', 'currentColor');
			} else {
			svgIcon{{ $post->id }}.setAttribute('fill', 'none');
			}
			}
			// console.log(data);
			})
			.catch(error => {
			// console.error(error);
			});
			});
		
			
		</script>
		
		
		@endif
		
	</div>
	
</div>