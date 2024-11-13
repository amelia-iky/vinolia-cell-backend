<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'brand',
        'name',
        'price',
        'description',
        // 'images',
    ];
}
