<div id="abc" class="mb-5">
	
	<div class="card card-side bg-base-100 shadow-xl card-compact">
		<figure class="w-36 sm:w-44 md:w-48 pl-5 my-5">
			<img class="rounded-xl w-36" src="{{ $product->productImage}}"/>
		</figure>
		<div class="card-body card-compact">
			<h2 class="card-title font-bold">{{ $product->productName}}</h2>
			<p>{{ $product->description}}</p>
			<br>
			<p>Price: {{ number_format($product->price) }} IDR<br>
			Stock: {{ number_format($product->stock) }}<br>
			Sold: {{ number_format($product->totalBought()) }}
			</p>

			<div class="card-actions justify-end">
				<button class="btn btn-sm btn-primary">Edit</button>
			</div>
		</div>
	</div>
</div>