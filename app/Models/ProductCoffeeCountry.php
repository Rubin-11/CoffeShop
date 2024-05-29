<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ProductCoffeeCountry extends Model
{
    use HasFactory;

    protected $table = 'product_coffee_countries';

    protected $fillable = [
        'product_id',
        'coffee_country_id'
    ];

    public function products(): HasOne
    {
        return $this->hasOne(Product::class); // Один к одному
    }

    public function сoffeeRoastsLevels(): HasOne
    {
        return $this->hasOne(CoffeeCountry::class); // Один к одному
    }
}
