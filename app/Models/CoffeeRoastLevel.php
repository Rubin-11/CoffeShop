<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CoffeeRoastLevel extends Model
{
    use HasFactory;

    protected $table = 'сoffee_roasts_levels';

    protected $fillable = [
        'level',
    ];

    public function productCoffeeRoastsLevels(): BelongsTo
    {
        return $this->belongsTo(ProductCoffeeRoastLevel::class);
    }
}
