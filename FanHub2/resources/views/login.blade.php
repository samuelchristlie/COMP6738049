@extends('template', ["pageTitle" => "FanHub - Login"])

@section('header')
@include('navbar.logo')
@endsection

@section('content')
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
	<div class="sm:mx-auto sm:w-full sm:max-w-sm">
		<h2 class="mt-10 text-center text-2xl font-bold leading-9">
		Login to FanHub
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

		<form class="md:card md:card-bordered md:shadow-2xl space-y-6" action="#" method="POST">
			@csrf
			<div class="card-body">
				<div>
					<label for="user" class="text-sm font-medium leading-6">
						Email or username
					</label>
					<div class="mt-2">
						<input id="user" name="user" required class="input input-bordered w-full py-1.5 sm:text-sm sm:leading-6">
					</div>
				</div>
				
				<div>
					<div class="flex items-center justify-between">
						<label for="password" class="block text-sm font-medium leading-6">
							Password
						</label>
						<div class="text-sm">
							<a href="" class="font-semibold text-primary hover:text-primary-focus">
								Forgot password?
							</a>
						</div>
					</div>
					<div class="mt-2">
						<input id="password" name="pass" type="password" required class="input input-bordered w-full py-1.5 sm:text-sm sm:leading-6">
					</div>
				</div>
				
				<div>
					<button type="submit" class="btn btn-primary flex w-full justify-center rounded-md px-3 py-1.5 text-sm font-semibold leading-6 shadow-sm">
					Login
					</button>
				</div>
			</div>
		</form>
		
		<p class="mt-10 text-center text-sm text-gray-500">
			Not a member yet?
			<a href="signup" class="font-semibold leading-6 text-primary hover:text-primary-focus">
				Sign up
			</a>
		</p>
	</div>
</div>
@endsection