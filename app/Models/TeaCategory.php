<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TeaCategory extends Model
{
    use HasFactory;

    protected $table = 'tea_categories';

    protected $fillable = [
        'name',
    ];

    public function productTeaCategories(): BelongsTo
    {
        return $this->belongsTo(ProductTeaCategory::class);
    }
}
