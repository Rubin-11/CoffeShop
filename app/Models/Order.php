<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'user_id',
        'total',
        'status',
        'address_id',
        'delivery_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function delivery()
    {
        return $this->belongsTo(Delivery::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function basketItems()
    {
        return $this->hasManyThrough(BasketItem::class, Basket::class);
    }
}
