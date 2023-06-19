@extends('template', ['pageTitle' => 'FanHub'])

@section('header')

@if(isset($user))
@include('navbar.user')
@else
@include('navbar.guest')
@endif

@endsection

@section('content')
<div class="bg-white">
	<img class="overflow-hidden max-h-64 mx-auto" src="hero.gif"/>
</div>


{{-- Main Content --}}
<div class="px-12 pb-40 md:px-36 lg:px-52 mt-10 md:mt-18">
	<p class="font-bold text-2xl">
		Find your favorite artist here!
	</p>
	<div class="mt-5 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-3">
		@for($i = 0; $i < 8; $i++)
		<div class="card card-compact w-full bg-base-100 shadow-2xl">
			<figure>
				<img class="hover:scale-110 transition-all duration-100" class="aspect-square" src="/images/image 11.png" />
			</figure>
			<div class="relative ">
				<div class="avatar absolute mx-auto inset-x-0 -top-6">
					<div class="h-10 rounded-full mx-auto ring-2 ring-white ring-offset-0">
						<img src="/images/image 11.png" />
					</div>
				</div>
			</div>
			
			<div class="card-body">
				
				<span class="font-bold text-xl text-center">BTS</span>
				
			</div>
		</div>
		@endfor
	</div>
</div>


@endsection