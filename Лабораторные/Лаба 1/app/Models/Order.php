<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'user_id'
    ];

    public function items(): \Illuminate\Database\Eloquent\Relations\HasMany {
        return $this->hasMany(OrderItem::class);
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
