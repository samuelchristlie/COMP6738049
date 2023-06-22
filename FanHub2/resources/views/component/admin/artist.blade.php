<div id="artist{{ $artist->id }}" class="mb-5">
	
	<div class="card card-bordered border-gray-300 w-full shadow-lg pt-4 pb-2">
		{{-- Avatar --}}
		<div class="mx-8 mb-2">
			
			<div class="flex items-start">
				<a href="/{{"@".$artist->username}}">
					<img src="{{ $artist->profilePicture }}" alt="Avatar" class="w-12 h-12 rounded-full mr-4">
					<div class="relative w-full">
						<div>
							
							<h3 class="font-bold">{{$artist->name}}</h3>
							
							
							<p class="text-gray-600">{{"@".$artist->username}}</p>
						</a>
						
						
						<button id="approveButton{{ $artist->id }}" class="btn btn-sm btn-primary absolute top-0 right-0">
						Approve
						</button>
						
					</div>
				</div>
			</div>
			
		</div>
		
	</div>
</div>

<script>
		const button = document.querySelector('#approveButton{{ $artist->id }}');
		
		button.addEventListener('click', function(event) {
		event.preventDefault();
		
		const formData = new FormData();
		formData.append('_token', "{{ csrf_token() }}");
		formData.append('artist', '{{ $artist->id }}');
		
		fetch('/approve-artist', {
		method: 'POST',
		body: formData
		})
		.then(response => response.json())
		.then(data => {
		if (data.status === 'success') {
			document.getElementById('artist{{ $artist->id }}').remove();
		}
		// console.log(data);
		})
		.catch(error => {
		console.error(error);
		});
		});
</script>