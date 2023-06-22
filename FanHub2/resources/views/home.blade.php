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
		@foreach($artists as $artist)
		@include("component.homeArtist")
		@endforeach
	</div>
</div>


@endsection