<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    // Relación con el usuario (un carrito pertenece a un usuario)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relación con el producto (un carrito pertenece a un producto)
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}