<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HealthyFoodCategory extends Model
{
    use HasFactory;

    protected $table = 'healthy_food_categories';

    protected $fillable = [
        'name',
    ];

    public function productHealthyFoodCategories(): BelongsTo
    {
        return $this->belongsTo(ProductHealthyFoodCategory::class);
    }
}
