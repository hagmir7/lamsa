<?php

namespace App\Livewire;

use App\Models\Comment;
use Livewire\Component;

class Comments extends Component
{


    public $amount = 12;


    public function loadMore(){
        $this->amount += 12;
    }


    public function render()
    {
        return view('livewire.comments', [
            'comments' => Comment::take($this->amount)->get()
        ]);
    }
}
