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


    public $amount = 8;
    public $total_products = 0;


    public function mount()
    {
        $this->total_products = Product::all()->count();
    }

    public function loadMore(){
        $this->amount += 8;
    }



    public function render()
    {
        return view('livewire.product-card', [
            'products' => Product::take($this->amount)->get(),
        ]);
    }
}
