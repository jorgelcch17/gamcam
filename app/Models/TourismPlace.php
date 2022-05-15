<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourismPlace extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];

    //relacion uno a muchos inversa con usuarios
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //relacion uno a muchos inversa con TourismCategory
    public function tourism_category()
    {
        return $this->belongsTo(TourismCategory::class);
    }

    //relacion uno a muchos con la tabla tags
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    //relacion uno a muchos con la tabla images
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    //relacion uno a muchos con la tabla comments
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
