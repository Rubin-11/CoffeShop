<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CoffeeProcessingMethod extends Model
{
    use HasFactory;

    protected $table = 'сoffee_processings_methods';

    protected $fillable = [
        'name'
    ];
}
