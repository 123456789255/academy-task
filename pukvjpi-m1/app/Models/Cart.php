<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Cart extends Model
{
    protected $fillable = ['product_id'];

    public function Product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
}
