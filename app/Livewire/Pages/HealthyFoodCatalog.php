<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\Product;

class HealthyFoodCatalog extends Component
{
    public $products = [];

    public function mount()
    {
        $products = Product::where('category_id', 4)->get(); // ID категории здорового питания

        $this->products = $products;
    }
    
    public function render()
    {
        return view('livewire.pages.healthy-food-catalog');
    }
}
