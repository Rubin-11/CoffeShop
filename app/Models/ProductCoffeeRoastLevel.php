<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ProductCoffeeRoastLevel extends Model
{
    use HasFactory;
    
    protected $table = 'product_сoffee_roasts_levels';

    protected $fillable = [
        'product_id',
        'сoffee_roast_level_id'
    ];

    public function products(): HasOne
    {
        return $this->hasOne(Product::class); // Один к одному
    }

    public function сoffeeRoastsLevels(): HasOne
    {
        return $this->hasOne(CoffeeRoastLevel::class); // Один к одному
    }
}
