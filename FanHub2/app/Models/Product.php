<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'userId',
        'productName',
        'description',
        'price',
        'stock',
        'productImage',
    ];

    protected $casts = [
        'price' => 'integer',
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'userId');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class, "productId");
    }

    public function totalBought(){
        return Transaction::where('productId', $this->id)->sum('quantity');
    }
}
