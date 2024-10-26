<?php

namespace App\Livewire\Pages;

use App\Models\CoffeeAcidity;
use App\Models\CoffeeCountry;
use App\Models\CoffeeProcessingMethod;
use App\Models\SpecialCoffeeCategory;
use App\Models\TypeCoffee;
use Livewire\Component;
use App\Models\Product;

class CoffeeCatalog extends Component
{
    public $coffee = [];
    public $coffeeAcidity = [];
    public $coffeeCountry = [];
    public $coffeeProcessingMethod = [];
    public $specialCoffeeCategory = [];
    public $typesCoffee = [];
    public $selectedAcidity;
    public $selectedCountry;
    public $selectedCoffeeProcessingMethods;
    public $selectedSpecialCoffeeCategories;
    public $selectedTypeCoffee;



    public function mount()
    {
        $this->coffee = Product::where('category_id', 1)->get();
        $this->coffeeAcidity = CoffeeAcidity::all();
        $this->coffeeCountry = CoffeeCountry::all();
        $this->coffeeProcessingMethod = CoffeeProcessingMethod::all();
        $this->specialCoffeeCategory = SpecialCoffeeCategory::all();
        $this->typesCoffee = TypeCoffee::all();
        $this->selectedAcidity = 1;
        $this->selectedCountry = 1;
        $this->selectedCoffeeProcessingMethods = 1;
        $this->selectedSpecialCoffeeCategories = 1;
        $this->selectedTypeCoffee = 1;

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

    public function getCoffeeProcessingMethods()
    {
        $this->coffee = Product::whereHas('productCoffeeProcessingMethod', function ($query) {
            $query->where('сoffee_processing_method_id', $this->selectedCoffeeProcessingMethods);
        })->get();
    }

    public function getSpecialCoffeeCategories()
    {
        $this->coffee = Product::whereHas('productSpecialCoffeeCategories', function ($query) {
            $query->where('special_coffee_category_id', $this->selectedSpecialCoffeeCategories);
        })->get();
    }

    public function getTypesCoffee()
    {
        $this->coffee = Product::whereHas('productTypeCoffee', function ($query) {
            $query->where('type_coffee_id', $this->selectedTypeCoffee);
        })->get();
    }

    public function render()
    {
        return view('livewire.pages.coffee-catalog')->with([
            'coffees' => $this->coffee,
            'levels' => $this->coffeeAcidity,
            'countris' => $this->coffeeCountry,
            'processingMethods' => $this->coffeeProcessingMethod,
            'specialCoffeeCategories' => $this->specialCoffeeCategory,
            'typesCoffee' => $this->typesCoffee,
        ]);
    }
}
