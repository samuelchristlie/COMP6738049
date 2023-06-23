<div class="card card-compact w-full bg-base-100 shadow-2xl">
	<a href="{{ "/@".$artist->username }}">
		<figure class="rounded-xl">
			<img class="hover:scale-110 transition-all duration-100" class="aspect-square" src="{{ $artist->coverPicture }}" />
		</figure>
		<div class="relative">
			<div class="avatar absolute mx-auto inset-x-0 -top-6">
				<div class="h-10 w-10 rounded-full mx-auto ring-2 ring-white ring-offset-0">
					<img src="{{$artist->profilePicture}}" />
				</div>
			</div>
		</div>
		
		<div class="card-body">
			
			<span class="font-bold text-xl text-center">{{$artist->name}}</span>
			
		</div>
	</a>
</div>