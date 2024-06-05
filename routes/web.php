<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\Basket;
use App\Livewire\Pages\Blog;
use App\Livewire\Pages\CoffeeCatalog;
use App\Livewire\Pages\Contacts;
use App\Livewire\Pages\HealthyFoodCatalog;
use App\Livewire\Pages\Main;
use App\Livewire\Pages\ProductCard;
use App\Livewire\Pages\TeaCatalog;
use App\Livewire\Pages\VendingCatalog;
use App\Livewire\Pages\PersonalAccount;


Route::get('/', Main::class);
Route::get('/coffee_catalog', CoffeeCatalog::class);
Route::get('/tea_catalog', TeaCatalog::class);
Route::get('/vending_catalog', VendingCatalog::class);
Route::get('/healthy_food_catalog', HealthyFoodCatalog::class);
Route::get('/product_card', ProductCard::class);
Route::get('/blog', Blog::class);
Route::get('/basket', Basket::class);
Route::get('/contacts', Contacts::class);
Route::get('/personal_account', PersonalAccount::class);

require __DIR__.'/auth.php';
