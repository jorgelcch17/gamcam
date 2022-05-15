<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CamiriWiki extends Model
{
    use HasFactory;

    //usando la tabla camiriwiki   
    protected $table = 'camiriwiki';

    //indicando que usa la tabla camiriwiki
    protected $fillable = ['title','slug','body'];
}
