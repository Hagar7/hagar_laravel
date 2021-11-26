<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Products;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/',[FrontController::class,'index']);



Route::get('/add_to_cart/{product}', [App\Http\Controllers\CartController::class, 'add'])->name('cart.add')->middleware(['auth','verified']);
Route::get('/carts', [App\Http\Controllers\CartController::class, 'carts'])->name('carts')->middleware(['auth','verified']);


Route::get('/detail/{id}', [App\Http\Controllers\CartController::class, 'detail'])->name('detail');

route::get('/search', [SearchController::class, 'search'])->name('search');


Auth::routes();

//dasboard

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(['isAdmin']);

//users

Route::get('/all/users',[UserController::class,'index'])->name('all.users')->middleware(['isAdmin']);
Route::get('/destroy/user/{id}',[UserController::class,'destroy'])->name('delete.user')->middleware(['isAdmin']);
Route::get('/create/user',[UserController::class,'create'])->name('create.user')->middleware(['isAdmin']);
Route::Post('/store/user',[UserController::class,'store'])->name('store.user')->middleware(['isAdmin']);
Route::get('/update/user/{id}',[UserController::class,'update'])->name('update.user')->middleware(['isAdmin']);
Route::Put('/edit/user/{id}',[UserController::class,'edit'])->name('edit.user')->middleware(['isAdmin']);


//categories
Route::get('/all/category',[CategoryController::class,'index'])->name('all.categories')->middleware(['isAdmin']);
Route::get('/destroy/category/{id}',[CategoryController::class,'destroy'])->name('delete.category')->middleware(['isAdmin']);
Route::get('/create/category',[CategoryController::class,'create'])->name('create.category')->middleware(['isAdmin']);
Route::Post('/store/category',[CategoryController::class,'store'])->name('store.category')->middleware(['isAdmin']);
Route::get('/update/category/{id}',[CategoryController::class,'update'])->name('update.category')->middleware(['isAdmin']);
Route::Put('/edit/category/{id}',[CategoryController::class,'edit'])->name('edit.category')->middleware(['isAdmin']);


//products
Route::get('/all/products',[ProductController::class,'index'])->name('all.products')->middleware(['isAdmin']);
Route::delete('/delete/product/{id}',[ProductController::class,'destroy'])->name('delete.product')->middleware(['isAdmin']);
Route::get('/create/product',[ProductController::class,'create'])->name('create.product')->middleware(['isAdmin']);
Route::Post('/store/product',[ProductController::class,'store'])->name('store.product')->middleware(['isAdmin']);
Route::get('/update/product/{id}',[ProductController::class,'update'])->name('update.product')->middleware(['isAdmin']);
Route::Put('/edit/product/{id}',[ProductController::class,'edit'])->name('edit.product')->middleware(['isAdmin']);

