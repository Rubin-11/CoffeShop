<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CoffeeAcidity extends Model
{
    use HasFactory;

    protected $table = 'coffee_acidity';

    protected $fillable = [
        'name'
    ];

    public function productCoffeeAcidity(): BelongsTo
    {
        return $this->belongsTo(ProductCoffeeAcidity::class);
    }
}
