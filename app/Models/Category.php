<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{

    protected $fillable = ["name", "image", "description", "slug"];
    use HasFactory;


    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function products(){
        return $this->hasMany(Product::class);
    }



    protected static function boot()
    {
        parent::boot();

        static::created(function ($category) {
            $category->slug = Str::slug($category->name);
            $category->save();
        });
    }

}
