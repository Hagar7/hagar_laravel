<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search (Request $request) {
        if(isset($_GET['query'])) {

            $search_test = $_GET['query'];
            $search_products = Product::where("product_name", 'like', '%' .$search_test . '%')->paginate(4);
            $search_products->appends($request->all());

            return view('search',['products'=>$search_products ]);

        } else {

            return view ('first');
        }

    }
}
