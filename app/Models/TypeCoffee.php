<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TypeCoffee extends Model
{
    use HasFactory;

    protected $table = 'types_coffee';

    protected $fillable = [
        'name',
    ];

    public function productTypesCoffee(): BelongsTo
    {
        return $this->belongsTo(ProductTypeCoffee::class);
    }
}
