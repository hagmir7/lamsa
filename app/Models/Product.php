<?php

namespace App\Models;

use App\Enums\ProductStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ["name", "price", "text", "description", "status", "body"];

    protected $casts = [
        'status' => ProductStatusEnum::class,
    ];


    public function sizes()
    {
        return $this->belongsToMany(Size::class, 'product_size');
    }


    public function colors()
    {
        return $this->belongsToMany(Color::class, 'product_color');
    }


    public function category(){
        return $this->belongsTo(Category::class);
    }


    public function images(){
        return $this->hasMany(Image::class);
    }
}
