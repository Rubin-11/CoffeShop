<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ProductVendingCategory extends Model
{
    use HasFactory;
    
    protected $table = 'product_vending_categories';

    protected $fillable = [
        'product_id',
        'vending_category_id'
    ];

    public function products(): HasOne
    {
        return $this->hasOne(Product::class); // Один к одному
    }

    public function vendingCatalog(): HasOne
    {
        return $this->hasOne(VendingCategory::class); // Один к одному
    }
}
