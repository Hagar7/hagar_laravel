<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    public function index (){
        $products =Product::with(['category'])->get();

         return view('layouts.products',compact('products'));
     }
     public function destroy ($id){
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('all.products');
    }

    public function create () {
        $categories = Category::get();
       return view ('layouts.create-product',compact('categories'));
    }

    public function store (Request $request){
        $input = $request->all();
        $products = Product::create($input);
        if($request->hasFile('avatar') && $request->file('avatar')->isValid()){
            $products->addMediaFromRequest('avatar')->toMediaCollection('avatar');
        }
        return redirect()->route('all.products');
     }
     public function update ($id){
        $product = Product::find($id);
        $categories = category::get();
        return view('layouts.update-product',compact('product','categories'));
    }

    public function edit (Request $request, $id) {
        $product = Product::find($id);
        $product->update($request->except('_token','_method','avatar'));
       //  $products = Product::where('id',$id)->update($request->except('_token','_method','avatar'));
        if($request->hasFile('avatar') && $request->file('avatar')->isValid()){
            $product->addMediaFromRequest('avatar')->toMediaCollection('avatar');
    }
    return redirect()->route('all.products');
}

}


