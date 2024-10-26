<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCoffeeAcidity extends Model
{
    use HasFactory;

    protected $table = 'product_coffee_acidity';

    protected $fillable = [
        'product_id',
        'coffee_acidity_id'
    ];
}
