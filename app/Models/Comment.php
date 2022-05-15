<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['comment'];

    //relacion con usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //relacion con la tabla tourism_places
    public function tourism_place()
    {
        return $this->belongsTo(TourismPlace::class);
    }
}
