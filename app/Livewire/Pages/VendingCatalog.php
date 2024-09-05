<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\Product;

class VendingCatalog extends Component
{
    public $products = [];

    public function mount()
    {
        $products = Product::where('category_id', 3)->get(); // ID категории вендинга

        $this->products = $products;
    }

    public function render()
    {
        return view('livewire.pages.vending-catalog');
    }
}
