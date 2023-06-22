<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

use App\Models\Product;

class ArtistController extends Controller
{
    //
    public function sell(){
        if (!$this->isLoggedIn()){
            return redirect("login");
        } else if (!$this->getUser()->isArtist()){
            return redirect("");
        }
        $user = $this->getUser();

        return view("sell", ["user" => $user, "products" => $user->products()->orderByDesc("created_at")->get()]);
    }

    public function createProductIndex(){
        if (!$this->isLoggedIn()){
            return redirect("login");
        } else if (!$this->getUser()->isArtist()){
            return redirect("");
        }

        return view("createProduct", ["user" => $this->getUser()]);
    }

    public function createProduct(Request $request){
        if (!$this->isLoggedIn()){
            return redirect("login");
        } else if (!$this->getUser()->isArtist()){
            return redirect("");
        }

        $validator = Validator::make($request->all(), [
            'image' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string|min:3|max:64',
            'description' => 'required|string|min:15|max:128',
            'price' => 'required|integer|min:1000',
            'stock' => 'required|integer|min:1',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = $this->getUser();

        $file = $request->file('image');
        $hash = md5_file($file);
        $extension = $file-> getClientOriginalExtension();
        $image = Storage::url($file->storePubliclyAs("public", "images/".$hash.".".$extension));

        $name = $request->input("name");
        $description = $request->input("description");
        $price = $request->input("price");
        $stock = $request->input("stock");

        Product::create([
            'userId' => $user->id,
            'productName' => $name,
            'description' => $description,
            'price' => $price,
            'stock' => $stock,
            'productImage' => $image
        ]);

        return redirect("/sell");
    }
}
