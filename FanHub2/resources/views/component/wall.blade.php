<div class="min-h-screen pb-40 sm:mx-20 md:mx-32 lg:mx-72">
	@include("component.bio")
	
	{{-- New Post --}}
	@if(isset($user))
	@include("component.newPost")
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