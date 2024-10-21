<?php

namespace App\Livewire\Pages;

use App\Models\CoffeeRoastLevel;
use App\Models\ProductCoffeeAcidity;
use App\Models\CoffeeAcidity;
use Livewire\Component;
use App\Models\Product;
use Request;

class CoffeeCatalog extends Component
{
    public $coffee = [];
    public $coffeeAcidity = [];

    public $selectedAcidity;

    public function mount()
    {
        $this->coffee = Product::where('category_id', 1)->get();
        $this->coffeeAcidity = CoffeeAcidity::all();
        $this->selectedAcidity = null;
    }

    public function sortCoffeeAcidity()
    {
        $this->coffee = Product::whereHas('productCoffeeAcidity', function ($query) {
            $query->where('coffee_acidity_id', $this->selectedAcidity);
        })->get();
    }

    public function render()
    {
        return view('livewire.pages.coffee-catalog')->with([
            'coffees' => $this->coffee,
            'levels' => $this->coffeeAcidity,
        ]);
    }
}
