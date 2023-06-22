@extends('template', ['pageTitle' => 'FanHub - Edit Profile'])

@section('header')
@include('navbar.user')
@endsection

@section('content')
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
	<div class="sm:mx-auto sm:w-full sm:max-w-sm">
		<h2 class="mt-10 text-center text-2xl font-bold leading-9">
		Edit Profile
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
		
		<form class="md:card md:card-bordered md:shadow-2xl" action="/edit-profile" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="card-body">
				<div>
					<label for="cover" class="text-sm font-medium leading-6">
						Cover Picture
					</label>
					<div class="mt-2">
						<input type="file" name="cover" id="cover" class="file-input file-input-sm w-full max-w-xs">
						</div>
				</div>

				<div>
					<label for="profile" class="text-sm font-medium leading-6">
						Profile Picture
					</label>
					<div class="mt-2">
						<input type="file" name="profile" id="profile" class="file-input file-input-sm w-full max-w-xs">
						</div>
				</div>



				<div>
					<label for="name" class="text-sm font-medium leading-6">
						Display Name
					</label>
					<div class="mt-2">
						<input id="name" name="name" required class="input input-bordered w-full py-1.5 sm:text-sm sm:leading-6" value="{{ $user->name }}">
					</div>
				</div>
				
				<div>
					<label for="user" class="text-sm font-medium leading-6">
						Username
					</label>
					
					
					<div class="mt-2 input-group">
						<span>@</span>
						<input id="user" name="user" required class="input input-bordered w-full py-1.5 sm:text-sm sm:leading-6"  value="{{ $user->username }}">
					</div>
					
				</div>
				
				<div>
					<label for="email" class="text-sm font-medium leading-6">
						Email
					</label>
					<div class="mt-2">
						<input id="email" name="email" type="email" required class="input input-bordered w-full py-1.5 sm:text-sm sm:leading-6"  value="{{ $user->email }}">
					</div>
				</div>
				
				<div>
					<label for="address" class="text-sm font-medium leading-6">
						Address
					</label>
					<div class="mt-2">
						<textarea id="address" name="address" required class="textarea textarea-bordered w-full py-1.5 sm:text-sm sm:leading-6">{{ $user->address }}</textarea>
					</div>
				</div>
				
				<div>
					<button type="submit" class="btn btn-primary flex w-full justify-center rounded-md px-3 py-1.5 mb-3 text-sm font-semibold leading-6 shadow-sm">
					Confirm
					</button>
					
					<a href="{{ url()->previous() }}">
						<button type="button" class="btn btn-outline btn-primary flex w-full justify-center rounded-md px-3 py-1.5 text-sm font-semibold leading-6 shadow-sm">
						Cancel
						</button>
					</a>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection