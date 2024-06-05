<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\Product;

class CoffeeCatalog extends Component
{


    public function render()
    {
        $products = Product::where('category_id', '1')->get();

        // public $radio;
        
        // dd($products);
        return view('livewire.pages.coffee-catalog', [
            'products' => $products
        ]);
    }
}
