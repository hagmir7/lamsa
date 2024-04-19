<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ProductColor extends Pivot
{
    use HasFactory;

    protected $fillable = ['product_id', 'color_id'];


    public function products()
    {
        return $this->belongsToMany(Color::class, 'product_color');
    }
}
