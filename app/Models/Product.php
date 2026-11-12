<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'code',
        'name',
        'description',
        'price',
        'stock',
        'image_path',
        'image_key',
        'status',
        'seller_profile_id',
        'created_by',
        'approved_by',
        'published_at',
    ];
}
