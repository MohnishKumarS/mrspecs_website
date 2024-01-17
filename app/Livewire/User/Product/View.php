<?php

namespace App\Livewire\User\Product;

use Livewire\Component;

class View extends Component
{
    public $pro,$cat;


    public function addToCart(int $proId){
        dd($this->pro);
    }

    public function mount($product,$category){
        $this->pro = $product;
        $this->cat = $category;
    }
    public function render()
    {
        return view('livewire.user.product.view',[
            'pro' => $this->pro,
            'cat' => $this->cat
        ]);
    }
}
