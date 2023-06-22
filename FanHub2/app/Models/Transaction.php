<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'productId',
        'userId',
        'quantity',
        'paymentMethod',
        'price',
        'address',
        'purchasedOn',
        'status'
    ];

    protected $timestamps = [
        'purchasedOn',
    ];

    protected $casts = [
        'quantity' => 'integer',
        'price' => 'integer',
        'purchasedOn' => 'timestamp'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
