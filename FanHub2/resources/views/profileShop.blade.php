@extends('template', ['pageTitle' => 'FanHub - Shop'])

@section('header')
@include('navbar.user')
@endsection

@section('content')

{{-- Main Content --}}



<div class="px-12 pb-40 md:px-36 lg:px-52">
	@include("component.bio")
	
	<p class="font-bold text-2xl">
		Shop from your favorite artist!
	</p>
	<div class="mt-5 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-3">
		@foreach($products as $product)
		@include("component.profileProduct")
		@endforeach
	</div>

	
</div>



@endsection