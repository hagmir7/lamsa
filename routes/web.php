<?php

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCart;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome', ['title' => "Lamssa Fashion"]);
});



Route::get('/product/{product}', function (Product $product) {
    return view('product', [
        'product' => $product,
        'title' => $product->name
    ]);
})->name('product');


Route::get('/category/{category}', function (Category $category) {
    return view('category', [
        'category' => $category,
        'title' => $category->name
    ]);
})->name('category');


Route::get('/cart', function () {
    $cart = auth()->user()?->cart;

    $items = ProductCart::where('cart_id', $cart?->id)->get();
    $total = 0;

    foreach ($items as $item) {
        $total += $item->product->price;
    }
    $title = "Lamssa Fashion";
    return view('cart', compact('items', 'total', 'title'));
})->name('cart');



Route::get('/cart/remove/{productCart}', function (ProductCart $productCart) {

    $cart = auth()->user()?->cart;
    if($productCart->cart_id == $cart->id){
        $productCart->delete();
    }
    return redirect(route('cart'));
})->name('cart.remove');




Route::get('/order/create', function () {

    $cart = auth()->user()?->cart;
    if($cart){
    }
    return redirect(route('checkout'));
})->name('order.create');


Route::view('/about', 'about', ['title' => "À propos de nous"])->name('about');
Route::view('/contact','contact', ['title' => "Contactez-nous"])->name('contact');
Route::view('/comments','comments', ['title' => "Que disent les clients ?"])->name('comments');
Route::view('/thank','thank', ['title' => "À propos de nous"])->name('thank');
