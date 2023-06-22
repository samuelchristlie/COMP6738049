@extends('template', ['pageTitle' => 'FanHub - Your Products'])

@section('header')
@include('navbar.user')
@endsection

@section('content')
<div class="min-h-screen pt-5 pb-40 sm:mx-20 md:mx-32 lg:mx-72">
	<a href="/create-product">
		<button class="btn btn-primary w-full mb-5">
		Create new product
		</button>
	</a>
	
	
	@foreach($products as $product)
	@include('component.artist.product')
	@endforeach
</div>
@endsection