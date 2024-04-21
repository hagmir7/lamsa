<?php

namespace App\Livewire;

use App\Models\Order;
use App\Models\ProductOrder;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateOrder extends Component
{
    #[Validate('required|min:3')]
    public $first_name;
    #[Validate('required|min:3')]
    public $last_name;
    #[Validate('required|min:3')]
    public $city;
    #[Validate('required|min:3')]
    public $phone;
    #[Validate('required|min:3')]
    public $address;

    public $product_id;


    public function mount($id = null){
        $this->product_id = $id;
    }


    public function save(){
        if(auth()->user()){
            $user = auth()->user();
            $this->validate();
            $order = Order::create([
                'full_name' => $this->first_name . " " . $this->last_name,
                'city' => $this->city,
                'phone' => $this->phone,
                'address' => $this->address,
                'user_id' => $user->id,
                'status' => 1
            ]);
            $products = $user->cart->products;
            foreach($products as $item){
                ProductOrder::create([
                    'product_id' => $item->id,
                    'quantity' => 1,
                    'order_id' => $order->id
                ]);

            }

            $items = ProductCard::where('cart_id', auth()->user()->cart->id)->get();
            foreach($items as $item){
                $item->delete();
            }

        }else{
            $order = Order::create([
                'full_name' => $this->first_name . " " . $this->last_name,
                'city' => $this->city,
                'phone' => $this->phone,
                'address' => $this->address,
                'status' => 1
            ]);
            ProductOrder::create([
                'product_id' => $this->product_id,
                'quantity' => 1,
                'order_id' => $order->id
            ]);
        }

        return redirect('thank');

    }


    public function render()
    {
        return view('livewire.create-order');
    }
}
