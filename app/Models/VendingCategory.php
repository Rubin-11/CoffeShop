<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VendingCategory extends Model
{
    use HasFactory;

    protected $table = 'vending_categories';

    protected $fillable = [
        'name',
    ];

    public function productVendingCategories(): BelongsTo
    {
        return $this->belongsTo(ProductVendingCategory::class);
    }
}
