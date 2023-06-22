@extends('template', ['pageTitle' => 'FanHub'])

@section('header')

@include('navbar.user')

@endsection

@section('content')
<div class="min-h-screen pt-5 pb-40 sm:mx-20 md:mx-32 lg:mx-72">

	@foreach($artists as $artist)
	@include("component.admin.artist")
	@endforeach
	
</div>
@endsection