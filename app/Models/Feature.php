<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $fillable = [
        'value',
        'description',
        'options_id'
    ];

    public function options()
    {
        return $this->belongsTo(Option::class); // una caracteristica pertenece a una opcion
    }

    public function variants()
    {
        return $this->belongsToMany(Variant::class) // una caracteristica puede tener muchas variantes
            ->withTimeStamps();
    }
}
