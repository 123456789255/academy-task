<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function Cart()
    {
        return $this->belongsTo(Cart::class, 'id', 'product_id');
    }
}
