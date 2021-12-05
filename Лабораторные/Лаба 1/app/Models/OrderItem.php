<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $table = 'order_items';

    protected $fillable = [
        'order_id',
        'product_id',
        'count',
    ];


    public function orders(): \Illuminate\Database\Eloquent\Relations\BelongsToMany {
        return $this->belongsToMany(Order::class);
    }

    public function product(){
        return $this->belongsTo(Product::class, 'product_id');
    }

}
