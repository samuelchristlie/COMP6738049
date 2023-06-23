<div class="card card-compact w-full bg-base-100 shadow-2xl">
	
	<div onclick="confirmPurchase{{$product->id}}.showModal()">
		<figure class="rounded-xl">
			<img class="hover:scale-110 w-full transition-all duration-100" class="aspect-square" src="{{url($product->productImage)}}" />
		</figure>
		
		<div class="card-body">
			
			<span class="font-bold text-xl text-center">{{$product->productName}}</span>
			<span class="text-center">{{$product->price}} IDR</span>
		</div>
	</div>
	
	<dialog id="confirmPurchase{{$product->id}}" class="modal">
	<div method="dialog" class="modal-box">
		<button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
		<div class="mt-2">
			<img src="{{url($product->productImage)}}" alt="{{$product->productName}}" class=" rounded-xl w-full h-64 object-cover">
			<h2 class="text-2xl font-bold mt-4">{{$product->productName}}</h2>
			<p class="mb-5">{{$product->description}}</p>
		</div>
		
		
		<div class="modal-footer text-right">
			<p class="text-gray-500 text-xl mb-2">{{$product->price}} IDR</p>
			<a href="/buy/{{$product->id}}">
				<button class="btn btn-primary">Buy Now</button>			
			</a>
		</div>
	</div>
	<form method="dialog" class="modal-backdrop">
		<button>close</button>
	</form>
	</dialog>
</div>