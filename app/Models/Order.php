<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // Relación con el usuario (una orden pertenece a un usuario)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relación con el producto (una orden pertenece a un producto)
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}