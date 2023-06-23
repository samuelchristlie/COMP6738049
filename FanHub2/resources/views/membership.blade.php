@extends('template', ['pageTitle' => 'FanHub - Membership'])

@section('header')

@include('navbar.user')

@endsection

@section('content')

@php
use Carbon\Carbon;
@endphp

<div class="min-h-screen pb-40 sm:mx-20 md:mx-32 lg:mx-72 pt-10">
	
	<div class="bg-white rounded-lg shadow-lg p-6 flex flex-wrap items-center justify-between">
		<img src="{{ asset('images/hdLogo.png') }}" alt="Logo" class="w-full max-w-sm px-20 mx-auto py-10 order-2 md:order-1">
		<div class="w-full md:w-auto md:flex-1 md:pl-6 order-1 md:order-2">
			<h2 class="text-xl font-bold mb-4">Membership Status</h2>
			@if ($user->isMember())
			@php
			$membership = $user->isMember()
			@endphp
			<p class="text-green-500 font-bold mb-4">You are currently a member!</p>
			<p>Member until {{Carbon::parse($membership->membershipEnd)->diffForHumans()}}</p>
			@else
			<p class="text-red-500 font-bold mb-4">You are not a member yet.</p>
			<ul class="list-disc list-inside mb-4">
				<li>Chat with artists</li>
				<li>Access exclusive posts</li>
				<li>Early access to new releases</li>
				<li>Discounts on merchandise</li>
				<li>And much more!</li>
			</ul>
			<form action="/membership" method="POST">
				@csrf
				<p class="text-gray-500 font-bold mb-4">Get 1 year of membership for only 100,000 IDR!</p>
				<button class="btn btn-primary w-full">Become a member</button>
			</form>
			@endif
		</div>
	</div>
	
	<style>
	@media (max-width: 768px) {
	.order-1 {
	order: 2;
	}
	.order-2 {
	order: 1;
	}
	}
	</style>
	
	
	
	
</div>
@endsection