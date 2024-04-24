<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    protected $fillable = ["name","code", 'created_at', 'created_at'];

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
