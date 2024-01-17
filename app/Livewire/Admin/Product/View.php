<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class View extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public function render()
    {
        $product = Product::orderBy('id','DESC')->paginate(10);
        return view('livewire.admin.product.view',compact('product'));
    }
}
