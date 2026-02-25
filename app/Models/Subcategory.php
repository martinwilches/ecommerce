<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable = [
        'name',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class); // una subcategoria pertenece a una categoria (uno a uno)
    }

    public function products()
    {
        return $this->hasMany(Product::class); // una subcategoria puede tener muchos productos (uno a muchos)
    }
}
