<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ProductMethodCoffeePreparation extends Model
{
    use HasFactory;
    
    protected $table = 'product_methods_coffee_preparation';

    protected $fillable = [
        'product_id',
        'method_coffee_preparation_id'
    ];

    public function products(): HasOne
    {
        return $this->hasOne(Product::class); // Один к одному
    }

    public function methodsCoffeePreparation(): HasOne
    {
        return $this->hasOne(MethodCoffeePreparation::class); // Один к одному
    }
}
