<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ProductColor extends Pivot
{
    use HasFactory;

    protected $fillable = ['product_id','color_id', 'created_at', 'created_at'];


    public function products()
    {
        return $this->belongsToMany(Color::class, 'product_color');
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
