<?php

namespace App\Models;

use App\Enums\ProductStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ["name", "price", "text", "description", "status", "body", "slug"];

    protected $casts = [
        'status' => ProductStatusEnum::class,
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected static function boot()
    {
        parent::boot();

        parent::creating(function ($product) {
            $product->slug = Str::slug($product->name);
        });
    }



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
