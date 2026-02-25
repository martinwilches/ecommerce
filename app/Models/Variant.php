<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    protected $fillable = [
        'sku',
        'image_path',
        'product_id'
    ];

    public function products()
    {
        return $this->belongsTo(Product::class); // una variante pertenece a un producto
    }

    public function features()
    {
        return $this->belongsToMany(Feature::class) // una variante puede tener muchas caracteristicas (muchos a muchos)
            ->withTimeStamps();
    }
}
