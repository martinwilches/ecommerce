<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'family_id'
    ];

    public function family()
    {
        return $this->belongsTo(Family::class); // una categoria pertenece a una familia (uno a uno)
    }

    public function subcategories()
    {
        return $this->hasMany(Subcategory::class); // una categoria puede tener muchas subcategorias (uno a muchos)
    }
}
