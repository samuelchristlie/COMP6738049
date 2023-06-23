<div id="" class="mb-5">
	<div class="flex items-center bg-base-100 shadow-xl rounded-xl p-4">
		<figure class="w-1/4 mr-4">
			<img class="rounded-xl w-full" src="{{ $product->productImage}}"/>
		</figure>
		<div class="w-2/3">
			<h2 class="font-bold">{{ $product->productName}}</h2>
			<p class="mt-2">{{ $product->description}}</p>
			<div class="mt-4">
				<p>Price: {{ number_format($product->price) }} IDR</p>
				<p>Stock: {{ number_format($product->stock) }}</p>
				<p>Sold: {{ number_format($product->totalBought()) }}</p>
			</div>
			<div class="mt-4 flex justify-end">
				<button class="btn btn-sm btn-primary">Edit</button>
			</div>
		</div>
	</div>
</div>