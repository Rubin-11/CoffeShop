<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\Product;

class TeaCatalog extends Component
{
    public $products = [];

    public function mount()
    {
        $products = Product::where('category_id', 2)->get(); // ID категории чая

        $this->products = $products;
    }

    public function render()
    {
        return view('livewire.pages.tea-catalog');
    }
}
