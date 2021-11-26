<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index () {
        $categories = Category::all();

        return view ('layouts.categories',compact('categories'));
    }

    public function destroy ($id) {
        $category = category::find($id);
        $category->delete();
        return redirect()->route('all.categories');
    }

    public function create () {
        return view ('layouts.create-category');
    }
    public function store(Request $request) {
        $input = $request->all();
        $categories = category::create($input);
        if($request->hasFile('category') && $request->file('category')->isValid()){
            $categories->addMediaFromRequest('category')->toMediaCollection('category');
        }
        return redirect()->route('all.categories');

    }
    public function update ($id) {
        $category = category::find($id);
        return view ('layouts.update-category',compact('category'));
    }
    public function edit (Request $request,$id) {
        $category = category::find($id);
        $category->update($request->except('_token','_method'));
        if($request->hasFile('category') && $request->file('category')->isValid()){
            $category->addMediaFromRequest('category')->toMediaCollection('category');
    }
    return redirect()->route('all.categories');
}
}
