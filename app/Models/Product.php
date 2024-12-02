<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'description', 'price', 'quantity', 'category_id', 'image'
    ];

    // Relación con la categoría
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    // Relación con el carrito
    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

    // Relación con las órdenes
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}