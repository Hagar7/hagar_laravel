<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index(){
        $categories=Category::take(2)->skip(1)->get();
        $categ=Category::first();
        $products =Product::with(['category'])->paginate(8);

        $CategoryProducts =Category::where('category_name','Women')->first()->products;
       // dd($CategoryProducts);
        $Categorymens =Category::where('category_name','Mens')->first()->products;
        $Categorykids =Category::where('category_name','Kids')->first()->products;
        $trendItems = Product::inRandomOrder()->limit(8)->get();
        $filterCategory = Category::all();


        return view('first',compact('categories','categ','products','CategoryProducts','filterCategory','Categorymens','Categorykids','trendItems'));
    }

    public function cart ($id) {
        $product = Product::find($id);
        return view('cart',compact('product'));

        }
}
