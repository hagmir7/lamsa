<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Models\Category;
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

    protected $paginationTheme = 'bootstrap';

    public $amount = 8;
    public $total_products = 0;

    public Category $category;


    public function mount(Category $category)
    {
        $this->category = $category;
        $this->total_products = Product::all()->count();
    }

    public function loadMore(){
        $this->amount += 8;
    }



    public function render()
    {
        $products = $this->category->name
            ? $this->category->products()->take($this->amount)->orderBy('created_at', 'asc')->get()
            : Product::take($this->amount)->orderBy('created_at', 'asc')->get();
        return view('livewire.product-card', [
            'products' => $products,
        ]);
    }

}
