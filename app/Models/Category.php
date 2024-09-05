<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name',
    ];

   // Предполагаем, что внешний ключ в таблице categories называется product_id
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    // public function products()
    // {
    //     return $this->hasMany(Product::class, 'category_id');
    // }
    
}
