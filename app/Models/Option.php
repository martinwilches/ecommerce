<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = [
        'name',
        'type'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class)
            ->withPivot('value')
            ->withTimeStamps(); // una opcion puede estar presente en mas de un producto (muchos a muchos)
    }

    public function features()
    {
        return $this->hasMany(Feature::class); // una opcion puede tener muchas caracteristicas (uno a muchos)
    }
}
