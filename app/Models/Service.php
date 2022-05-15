<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    //usando tabla public services
    protected $table = 'public_services';

    protected $fillable = ['name', 'body','is_active','ubicacion','facebook','whatsapp','website'];

    public function category_services()
    {
        return $this->belongsToMany(CategoryService::class);
    }
}
