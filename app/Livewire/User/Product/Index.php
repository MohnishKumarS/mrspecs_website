<?php

namespace App\Livewire\User\Product;

use Livewire\Component;

class Index extends Component
{
    public $products;
    public $category;

    public function mount($products,$category){
        $this->products = $products;
        $this->category = $category;
    }


    public function render()
    {
        return view('livewire.user.product.index',[
            'products' => $this->products,
            'category' => $this->category
        ]);
    }
}
