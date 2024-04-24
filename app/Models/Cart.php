<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;


    protected $fillable = ['user_id', 'created_at', 'created_at'];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function products(){
        return $this->belongsToMany(Product::class, 'product_cart')->withTimestamps();
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
