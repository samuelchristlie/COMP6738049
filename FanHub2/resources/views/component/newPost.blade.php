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
						@include('component.checkmark', ["size" => 5, "user"=>$user])
						
					</div>
					<p class="text-gray-600">{{ "@".$user->username }}</p>
				</div>
			</div>
		</div>
		
		{{-- Form --}}
		<form action="/new-post" method="POST" class="mx-8" enctype="multipart/form-data">
			@csrf
			<div class="mb-2">
				<textarea name="content" id="content" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-lg outline-none focus:border-secondary" placeholder="Share your thoughts...">@if(isset($profile) && $profile->username !== $user->username){{"@".$profile->username." "}}@endif</textarea>
			</div>
			@if($user->isArtist())
			<div class="mb-2 flex">
				<label class="label cursor-pointer">
					<input type="checkbox" name="exclusive" value="exclusive" class="checkbox checkbox-primary" />
					<span class="ml-2 label-text">Exclusive</span> 
				</label>
				
			</div>
			@endif
			<div class="mb-2">
				<input type="file" name="image" id="image" class="file-input file-input-sm">
			</div>

			<div class="flex justify-end">
				<button type="submit" class="btn btn-primary ">Post</button>
			</div>
		</form>
	</div>
	
</div>