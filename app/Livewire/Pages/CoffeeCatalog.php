<?php

namespace App\Livewire\Pages;

use App\Models\CoffeeRoastLevel;
use Livewire\Component;
use App\Models\Product;
use App\Models\ProductCoffeeRoastLevel;
use Illuminate\Support\Facades\DB;

class CoffeeCatalog extends Component
{
    public $products = [];

    public function mount()
    {
        $products = Product::where('category_id', 1)->get(); // ID категории кофе

        $this->products = $products;
    }

    public function render()
    {
        return view('livewire.pages.coffee-catalog');
    }
}
