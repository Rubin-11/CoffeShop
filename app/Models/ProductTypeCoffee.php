<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ProductTypeCoffee extends Model
{
    use HasFactory;
    
    protected $table = 'product_types_coffee';

    protected $fillable = [
        'product_id',
        'type_coffee_id'
    ];

    public function products(): HasOne
    {
        return $this->hasOne(Product::class); // Один к одному
    }

    public function typesCoffee(): HasOne
    {
        return $this->hasOne(TypeCoffee::class); // Один к одному
    }
}
