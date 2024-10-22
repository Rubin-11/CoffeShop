<?php

namespace App\Livewire\Pages;

use App\Models\CoffeeAcidity;
use App\Models\CoffeeCountry;
use Livewire\Component;
use App\Models\Product;

class CoffeeCatalog extends Component
{
    public $coffee = [];
    public $coffeeAcidity = [];
    public $coffeeCountry = [];
    public $selectedAcidity;
    public $selectedCountry;


    public function mount()
    {
        $this->coffee = Product::where('category_id', 1)->get();
        $this->coffeeAcidity = CoffeeAcidity::all();
        $this->coffeeCountry = CoffeeCountry::all();
        $this->selectedAcidity = null;
    }

    public function sortCoffeeAcidity()
    {
        $this->coffee = Product::whereHas('productCoffeeAcidity', function ($query) {
            $query->where('coffee_acidity_id', $this->selectedAcidity);
        })->get();
    }

    public function getCoffeeByCountry()
    {
        $this->coffee = Product::whereHas('productCoffeeCountry', function ($query) {
            $query->where('coffee_country_id', $this->selectedCountry);
        })->get();
    }

    public function render()
    {
        return view('livewire.pages.coffee-catalog')->with([
            'coffees' => $this->coffee,
            'levels' => $this->coffeeAcidity,
            'countris'=> $this->coffeeCountry,
        ]);
    }
}
