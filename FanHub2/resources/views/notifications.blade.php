@extends('template', ['pageTitle' => 'FanHub - Notifications'])

@section('header')

@include('navbar.user')

@endsection

@section('content')

@php
use Carbon\Carbon;
@endphp

<div class="min-h-screen pb-40 sm:mx-20 md:mx-32 lg:mx-72 pt-10">

	@foreach($notifications as $notification)
	<a href="{{$notification->url}}">
		<div class="bg-white rounded-lg shadow-lg px-4 py-3 flex items-center mb-4">
			
			<img class="w-16 h-16 mr-4 rounded-lg" src="{{$notification->thumbnail}}" alt="Thumbnail">
			<div class="flex-grow">
				<div class="text-sm font-medium text-gray-900 mb-1">{{$notification->content}}</div>
				<div class="text-xs text-gray-500">{{Carbon::parse($notification->time)->diffForHumans()}}</div>
			</div>
			
		</div>
	</a>
	@endforeach
	
	
	
	
	
	
	
</div>
@endsection