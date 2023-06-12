<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'product_name',
        'description',
        'price',
        'status_product',
        'product_image',
    ];

    protected $casts = [
        'price' => 'integer',
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    


}
