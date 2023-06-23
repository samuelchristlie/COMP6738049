@extends('template', ['pageTitle' => 'FanHub - Buy '.$product->productName])

@section('header')
@include('navbar.user')
@endsection

@section('content')

{{-- Main Content --}}







<div class="card m-5  mx-auto max-w-2xl card-bordered border-base-200 shadow-2xl px-5 py-6 sm:p-8">
	@if($errors->any())
	<div class="mb-5 alert alert-error">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	<div class="flex flex-col sm:flex-row justify-between items-center mb-8">
		<div class="flex-shrink-0">
			<img src="{{ asset($product->productImage) }}" alt="{{ $product->productName }}" class="w-40 h-40 rounded-xl">
		</div>
		<div class="flex-grow sm:ml-8 mt-4 sm:mt-0">
			<h2 class="text-3xl font-bold mb-2">{{ $product->productName }}</h2>
			<p class="text-gray-600 text-lg mb-4">{{ number_format($product->price) }} IDR</p>
			<p class="text-gray-600 text-lg mb-4">{{ number_format($product->stock) }} in stock</p>
		</div>
	</div>
	<form id="order-form" action="/confirm-buy" method="POST" class="mb-5">
		@csrf
		<input type="hidden" name="product" value="{{$product->id}}">
		<p class="text-xl font-bold mb-2">Order Details:</p>
		<div class="flex flex-col sm:flex-row mb-4">
			<div class="flex-grow sm:mr-4">
				<label for="quantity" class="block text-lg font-bold mb-2">Quantity:</label>
				<input type="number" name="quantity" id="quantity" class="input input-bordered w-full px-4 py-2 border-gray-300 focus:outline-none" value="1" min="1" max="{{ $product->stock }}" required>
			</div>
			<div class="flex-grow sm:ml-4 mt-4 sm:mt-0">
				<label for="paymentMethod" class="block text-lg font-bold mb-2">Payment Method:</label>
				<select name="paymentMethod" id="paymentMethod" class="w-full input input-bordered w-full px-4 py-2 border-gray-300  focus:outline-none" required>
					<option value="">Select Payment Method</option>
					<option value="gopay">GoPay</option>
					<option value="creditCard">Credit Card</option>
					<option value="paypal">PayPal</option>
				</select>
			</div>
		</div>
		<div class="flex-grow mb-4">
			<label for="address" class="block text-lg font-bold mb-2">Shipping Address:</label>
			<textarea name="address" id="address" class="w-full textarea textarea-bordered w-full px-4 py-2 border-gray-300  focus:outline-none" rows="4" required>{{$user->address}}</textarea>
		</div>
		<div class="flex justify-between items-center">
			<p class="text-lg font-bold text-gray-600">Estimated Price:</p>
			<p class="text-lg font-bold" id="estimated-price">{{ number_format($product->price + 15000) }} IDR</p>
		</div>
		<div class="flex justify-between items-center">
			<p class="text-lg font-bold text-gray-600">Shipping Cost:</p>
			<p class="text-lg font-bold">15,000 IDR</p>
		</div>
		<div class="flex justify-center">
			<button type="submit" class="btn btn-primary btn-wide mt-10">Place Order</button>
		</div>
	</form>
	
	<script>
	// Get the form and the quantity input
	const form = document.querySelector('#order-form');
	const quantityInput = form.querySelector('#quantity');
	const estimatedPrice = document.querySelector('#estimated-price');
	
	// Calculate the estimated price and update the text
	function updateEstimatedPrice() {
	const quantity = parseInt(quantityInput.value);
	const price = parseInt("{{ $product->price }}");
	const shippingCost = parseInt(15000);
	const estimatedTotal = (price * quantity) + shippingCost;
	estimatedPrice.innerHTML = estimatedTotal.toLocaleString() + " IDR";
	}
	
	// Update the estimated price whenever the quantity input changes
	quantityInput.addEventListener('input', updateEstimatedPrice);
	</script>
	{{-- <div class="flex justify-center">
		<a href="#" class="bg-blue-600 hover:bg-blue-700 text-white rounded-lg px-6 py-3 text-lg font-bold shadow-lg">Track My Order</a>
	</div>
	<div class="mt-8">
		<p class="text-lg font-bold mb-2">Thank you for shopping with us!</p>
		<p class="text-gray-600">An email with your order details has been sent to you.</p>
	</div> --}}
</div>



@endsection