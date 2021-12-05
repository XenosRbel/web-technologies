<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    use HasFactory;

    protected $table = 'products';

    public const AVAILABILITY_IN_STOCK = 'In Stock';
    public const AVAILABILITY_OUT_OF_STOCK = 'Out Of Stock';

    protected $fillable = [
        'title',
        'category',
        'availability',
        'description',
        'image',
        'price',
    ];

}
