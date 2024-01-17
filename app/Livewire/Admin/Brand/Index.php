<?php

namespace App\Livewire\Admin\Brand;

use App\Models\Brand;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $brand = Brand::latest()->get();
        return view('livewire.admin.brand.index',[
            'brand' => $brand
        ])
        ->extends('admin.layout')
        ->section('content');
    }
}
