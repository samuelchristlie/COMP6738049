@extends('template', ['pageTitle' => 'FanHub - Create Product'])

@section('header')
@include('navbar.user')
@endsection

@section('content')
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
	<div class="sm:mx-auto sm:w-full sm:max-w-sm">
		<h2 class="mt-10 text-center text-2xl font-bold leading-9">
		Create New Product
		</h2>
	</div>
	
	<div class="mt-3 sm:mx-auto sm:w-full sm:max-w-sm">
		@if($errors->any())
		<div class="mb-5 alert alert-error">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
		
		<form class="md:card md:card-bordered md:shadow-2xl" action="/create-product" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="card-body mt-0">
				<div>
					<label for="image" class="text-sm font-medium leading-6">
						Product Image
					</label>
					<div class="mt-2">
						<input type="file" required name="image" id="image" class="file-input file-input-sm w-full max-w-xs">
					</div>
				</div>

				
				<div>
					<label for="name" class="text-sm font-medium leading-6">
						Product Name
					</label>
					<div class="mt-2">
						<input id="name" name="name" required class="input input-bordered w-full py-1.5 sm:text-sm sm:leading-6" value="">
					</div>
				</div>
				
				<div>
					<label for="description" class="text-sm font-medium leading-6">
						Product Description
					</label>
					
					
					
					<div class="mt-2">
						<textarea id="description" name="description" required class="textarea textarea-bordered w-full py-1.5 sm:text-sm sm:leading-6"></textarea>
					</div>
					
				</div>
				
				<div>
					<label for="price" class="text-sm font-medium leading-6">
						Price
					</label>
					<div class="mt-2 input-group">
						
						<input id="price" type="number" name="price" min="1000" value="10000" required class="input input-bordered w-full py-1.5 sm:text-sm sm:leading-6"  value="">
						<span>IDR</span>
					</div>
					
				</div>
				
				<div>
					<label for="stock" class="text-sm font-medium leading-6">
						Stock
					</label>

					<div class="mt-2">
						<input id="stock" name="stock" type="number" min="1" value="1" required class="input input-bordered w-full py-1.5 sm:text-sm sm:leading-6"  value="">
					</div>
				</div>
				
				<div>
					<button type="submit" class="btn btn-primary flex w-full justify-center rounded-md px-3 py-1.5 mb-3 text-sm font-semibold leading-6 shadow-sm">
					Create
					</button>
					
				</div>
			</div>
		</form>
	</div>
</div>
@endsection