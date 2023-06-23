@extends('template', ['pageTitle' => 'FanHub - Shop'])

@section('header')
@include('navbar.user')
@endsection

@section('content')

{{-- Main Content --}}





<div class="mx-auto max-w-screen-lg px-4 py-5">
	<div class="mx-auto max-w-screen-lg px-4 py-5">
		<h1 class="text-3xl font-bold mb-8">Transaction History</h1>
		
		<div class="flex flex-wrap items-center mb-5">
  <div class="w-full md:w-auto mb-4 md:mb-0 md:mr-8">
    <div class="bg-white rounded-lg shadow-lg px-4 py-3 text-center md:text-left">
      <div class="text-base md:text-xl font-bold mb-2">
        Total Purchases
      </div>
      <div class="text-lg md:text-3xl font-bold">
        {{ number_format($user->totalPurchase()) }}
      </div>
    </div>
  </div>
  <div class="w-full md:w-auto mb-4 md:mb-0 md:mr-8">
    <div class="bg-white rounded-lg shadow-lg px-4 py-3 text-center md:text-left">
      <div class="text-base md:text-xl font-bold mb-2">
        Total Spending
      </div>
      <div class="text-lg md:text-3xl font-bold">
        {{ number_format($user->totalSpent()) }} IDR
      </div>
    </div>
  </div>
  <div class="w-full md:w-auto">
    <div class="bg-white rounded-lg shadow-lg px-4 py-3 text-center md:text-left">
      <div class="text-base md:text-xl font-bold mb-2">
        Items Purchased
      </div>
      <div class="text-lg md:text-3xl font-bold">
        {{ number_format($user->totalBought()) }}
      </div>
    </div>
  </div>
</div>
		
		
		@foreach($transactions as $transaction)
		<div class="border-base-200 border-2 shadow-lg rounded-xl px-4 py-5 sm:p-6 mb-6 md:mb-8 lg:mb-10 flex flex-col md:flex-row items-center">
			<div class="flex-shrink-0 md:mr-6 mb-4 md:mb-0">
				<img src="{{url($transaction->product->productImage)}}" alt="" class="w-20 h-20 object-contain">
			</div>
			<div class="flex-grow">
				<div class="flex flex-col md:flex-row justify-between items-center mb-3">
					<h2 class="text-2xl font-bold mb-2 md:mb-0">#{{$transaction->id}}</h2>
					<p class="text-gray-600 text-lg">{{date("l j, Y", $transaction->purchasedOn)}}</p>
				</div>
				<div class="flex flex-col md:flex-row justify-between items-center mb-3">
					<p class="text-gray-600 text-lg">Product:</p>
					<p class="text-lg font-bold mb-2 md:mb-0">{{ $transaction->product->productName }}</p>
				</div>
				<div class="flex flex-col md:flex-row justify-between items-center mb-3">
					<p class="text-gray-600 text-lg">Quantity:</p>
					<p class="text-lg font-bold mb-2 md:mb-0">{{$transaction->quantity}}</p>
				</div>
				<div class="flex flex-col md:flex-row justify-between items-center mb-3">
					<p class="text-gray-600 text-lg">Price:</p>
					<p class="text-lg font-bold mb-2 md:mb-0">{{ number_format($transaction->price) }} IDR</p>
				</div>
				<div class="flex flex-col md:flex-row justify-between items-center mb-3">
					<p class="text-gray-600 text-lg">Shipping Address:</p>
					<p class="text-lg font-bold mb-2 md:mb-0">{{ $transaction->address }}</p>
				</div>
				<div class="flex flex-col md:flex-row justify-between items-center mb-3">
					<p class="text-gray-600 text-lg">Payment Method:</p>
					<p class="text-lg font-bold mb-2 md:mb-0">Credit Card</p>
				</div>
				<div class="flex flex-col md:flex-row justify-between items-center">
					<p class="text-gray-600 text-lg">Order Total:</p>
					<p class="text-lg font-bold mb-2 md:mb-0">{{ number_format($transaction->price + 15000) }} IDR</p>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>







@endsection