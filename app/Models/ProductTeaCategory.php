<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ProductTeaCategory extends Model
{
    use HasFactory;

     
    protected $table = 'product_tea_categories';

    protected $fillable = [
        'product_id',
        'tea_category_id'
    ];

    public function products(): HasOne
    {
        return $this->hasOne(Product::class); // Один к одному
    }

    public function teaCategories(): HasOne
    {
        return $this->hasOne(TeaCategory::class); // Один к одному
    }
}
