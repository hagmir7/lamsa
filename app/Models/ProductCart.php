<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ProductCart extends Pivot
{
    use HasFactory;

    protected $fillable = ['product_id', 'cart_id','quantity', 'created_at', 'created_at'];


    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function newQuery($ordered = true)
    {
        $query = parent::newQuery();
        if ($ordered) {
            $query->orderBy('created_at', 'asc');
        }
        return $query;
    }
}
