<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SpecialCoffeeCategory extends Model
{
    use HasFactory;

    protected $table = 'special_coffee_categories';

    protected $fillable = [
        'name',
    ];
}
