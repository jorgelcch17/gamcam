<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourismCategory extends Model
{
    use HasFactory;

    // indicar que usa la tabla tourism_categories
    // protected $table = 'turism_categories';

    protected $fillable = ['name','slug'];

    // relacion uno a muchos con la tabla turism_places
    public function tourism_places()
    {
        return $this->hasMany(TurismPlace::class);
    }
}
