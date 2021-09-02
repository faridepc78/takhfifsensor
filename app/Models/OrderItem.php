<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'orders_items';

    protected $guarded =
        [
            'id',
            'created_at',
            'updated_at'
        ];

    protected $fillable =
        [
            'order_id',
            'product_id',
            'price',
            'count'
        ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id')->withDefault();
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id')->withDefault();
    }
}
