<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function detail ($id) {

        $product = Product::find($id);

        return view('details',compact('product')) ;

       }



       public function add(Product $product)
       {

           if(   Cart::where('user_id',auth()->id())->where('product_id',$product->id)->exists()){
               Cart::where('product_id',$product->id)->delete();
               session()->flash('success', 'deleted from cart succeffully');

               return redirect()->back();
           }
           $cart=new Cart();
           $cart->product_id = $product->id;
           $cart->product_quantaty = 1;
               $cart->user_id=auth()->id();
               $cart->save();
               session()->flash('success', 'added to cart succeffully');

           return redirect()->back();

       }

       public function carts()
       {

        $carts = Cart::where('user_id',auth()->id())->get();


                return view('cart', compact('carts'));

       }



}
