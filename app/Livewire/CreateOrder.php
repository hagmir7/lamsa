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


    public function save($id = null){
        if(!$id){
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

        }else{
            $order = Order::create([
                'full_name' => $this->first_name . " " . $this->last_name,
                'city' => $this->city,
                'phone' => $this->phone,
                'address' => $this->address,
                'status' => 1
            ]);
            ProductOrder::create([
                'product_id' => $id,
                'quantity' => 1,
                'order_id' => $order->id
            ]);
        }

    }


    public function render()
    {
        return view('livewire.create-order');
    }
}
