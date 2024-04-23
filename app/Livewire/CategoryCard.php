<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryCard extends Component
{

    public $amount = 6;
    public $total_categories = 0;


    public function mount()
    {
        $this->total_categories = Category::all()->count();
    }

    public function loadMore()
    {
        $this->amount += 6;
    }


    public function render()
    {
        return view('livewire.category-card', [
            'categories' => Category::take($this->amount)->get(),
        ]);
    }
}
