<?php

namespace App\Models;

use App\Enums\OrderStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['full_name', 'city', 'address', 'phone', 'status', 'user_id'];


    protected $casts = [
        'status' => OrderStatusEnum::class,
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function products(){
        return $this->belongsToMany(Product::class, 'product_order');
    }
}
