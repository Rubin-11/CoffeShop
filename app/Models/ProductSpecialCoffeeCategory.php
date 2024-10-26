<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ProductSpecialCoffeeCategory extends Model
{
    use HasFactory;
    
    protected $table = 'product_special_coffee_categories';

    protected $fillable = [
        'product_id',
        'special_coffee_category_id'
    ];
}
