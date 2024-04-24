<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{

    protected $fillable = ["name", "image", "description","slug", 'created_at', 'created_at'];
    use HasFactory;


    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function newQuery($ordered = true)
    {
        $query = parent::newQuery();
        if ($ordered) {
            $query->orderBy('created_at', 'asc');
        }
        return $query;
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
