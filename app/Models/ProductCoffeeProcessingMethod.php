<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ProductCoffeeProcessingMethod extends Model
{
    use HasFactory;

    protected $table = 'product_сoffee_processings_methods';

    protected $fillable = [
        'product_id',
        'сoffee_processing_method_id',
    ];
}
