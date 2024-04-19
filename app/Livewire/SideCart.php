<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class SideCart extends Component
{


    public function mount(){
        // $ids = [1, 2, 3, 4];

        // Session::put('id_array', $ids);

        $products = Session::get('products');
    }

    public function render()
    {
        return view('livewire.side-cart');
    }
}
