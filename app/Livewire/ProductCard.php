<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Models\Product;
use App\Models\ProductCart;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;
use Livewire\WithPagination;

class ProductCard extends Component
{
    use WithPagination;

    public $cart;

    public $amount = 8;
    public $total_products = 0;
    public $userCart = [];

    // protected $paginationTheme = 'bootstrap';


    public function mount()
    {
        $user_cart = [];
        if (auth()->user()?->cart) {
            $user_products = auth()->user()?->cart?->products->pluck("id")->toArray();
            $user_cart = $user_products ?? [];
        }
        $this->userCart = $user_cart;

        $this->total_products = Product::all()->count();
    }

    public function hydrate(){
        if(auth()->user()){
            $user_products = auth()->user()->cart->products->pluck("id")->toArray();
            $this->userCart = $user_products;
        }

    }


    public function loadMore()
    {
        $this->amount += 8;
        $this->total_products = Product::all()->count();
    }


    public function addToCart($id)
    {

        if(auth()->user()->cart){
            $user_products = auth()->user()?->cart?->products->pluck("id")->toArray();
            if(in_array($id, $user_products)){
                $productCart = ProductCart::where('product_id', $id)->first();
                if ($productCart) {
                    $productCart->delete();
                }
            }else{

                $cart = auth()->user()->cart;
                ProductCart::create([
                    'cart_id' => $cart->id,
                    'product_id' => $id,
                    'quantity' => 1
                ]);
            }

            $user_products = auth()->user()->cart->products->pluck("id")->toArray();
            $this->userCart = $user_products;

        }else{

            $cart = Cart::create([]);
            $user_id = auth()->user()->id;
            $user = User::find($user_id);
            $user->update([
                'cart_id' => $cart->id
            ]);

            ProductCart::create([
                'cart_id' => $cart->id,
                'product_id' => $id,
                'quantity' => 1
            ]);
        }

        $this->dispatch('product-added');

    }




    public function render()
    {
        return view('livewire.product-card', [
            'products' => Product::take($this->amount)->get(),
            'userCart' => $this->userCart
        ]);
    }
}
