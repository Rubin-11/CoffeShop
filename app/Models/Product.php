<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'category_id',
    ];

    // Предполагаем, что внешний ключ в таблице products называется category_id
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function basketItems(): HasMany
    {
        return $this->hasMany(BasketItem::class);
    }

    // В модели Product
    public function coffeeRoastLevels(): HasMany
    {
        return $this->hasMany(CoffeeRoastLevel::class );
    }
    public function productCoffeeAcidity(): HasMany
    {
        return $this->hasMany(ProductCoffeeAcidity::class);
    }
}
