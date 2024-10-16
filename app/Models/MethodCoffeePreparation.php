<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MethodCoffeePreparation extends Model
{
    use HasFactory;
    
    protected $table = 'methods_coffee_preparation';

    protected $fillable = [
        'name'
    ];

    public function productMethodsCoffeePreparation(): BelongsTo
    {
        return $this->belongsTo(ProductMethodCoffeePreparation::class);
    }
}
