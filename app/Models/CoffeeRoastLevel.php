<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoffeeRoastLevel extends Model
{
    use HasFactory;

    protected $table = 'сoffee_roasts_levels';

    protected $fillable = [
        'level',
    ];
}
