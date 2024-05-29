<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ProductHealthyFoodCategory extends Model
{
    use HasFactory;
     
    protected $table = 'product_healthy_food_categories';

    protected $fillable = [
        'product_id',
        'healthy_food_category_id'
    ];

    public function products(): HasOne
    {
        return $this->hasOne(Product::class); // Один к одному
    }

    public function healthyFoodCategories(): HasOne
    {
        return $this->hasOne(HealthyFoodCategory::class); // Один к одному
    }
}
