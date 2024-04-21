<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ProductCart extends Pivot
{
    use HasFactory;

    protected $fillable = ['product_id', 'cart_id', 'quantity'];


    public function product(){
        return $this->belongsTo(Product::class);
    }
}
