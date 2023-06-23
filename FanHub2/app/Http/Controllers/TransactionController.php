<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Product;
use App\Models\Transaction;

class TransactionController extends Controller
{
    //

    public function confirmBuy($productId){
        $product = Product::where("id", $productId)->first();

        if (!$this->isLoggedIn()){
            return redirect("login");
        } else if (!$product){
            return redirect("/shop");
        } else if ($product->stock < 1){
            return redirect("/shop");
        }

        $user = $this->getUser();

        return view("confirmBuy", ["user"=>$user, "product"=>$product]);
    }

    public function buy(Request $request){

        if (!$this->isLoggedIn()){
            return redirect("/login");
        }

        $productId = $request->input("product");
        $product = Product::where("id", $productId)->first();

        if(!$product){
            return redirect("/shop");
        } else if ($product->stock < 1){
            return redirect("/shop");
        }

        $validator = Validator::make($request->all(), [
            'product' => 'required|integer|exists:products,id',
            'quantity' => 'required|integer|min:1|max:'.$product->stock,
            'paymentMethod' => 'required|in:gopay,creditCard,paypal',
            'address' => 'required|string|max:128',
        ]);



        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = $this->getUser();

        $quantity = $request->input("quantity");
        $paymentMethod = $request->input("paymentMethod");
        $address = $request->input("address");
        $price = $quantity * $product->price;

        Transaction::create([
            'productId' => $productId,
            'userId' => $user->id,
            'quantity' => $quantity,
            'paymentMethod' => $paymentMethod,
            'price' => $price,
            'address' => $address,
        ]);

        $product->stock = $product->stock - $quantity;
        $product->save();

        return redirect("orders");
    }

    public function history(){
        if (!$this->isLoggedIn()){
            return redirect("login");
        }

        $user = $this->getUser();
        $transactions = Transaction::where("userId", $user->id)->orderByDesc("purchasedOn")->get();

        return view("history", ["user"=>$user, "transactions"=>$transactions]);
    }
}
