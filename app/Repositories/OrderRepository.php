<?php

namespace App\Repositories;

use App\Models\Order;
use App\Models\OrderItem;

class OrderRepository
{
    public function storeOrder($values)
    {
        return Order::query()
            ->create([
                'user_id' => $values['user_id'],
                'province_id' => $values['province_id'],
                'city_id' => $values['city_id'],
                'address' => $values['address'],
                'phone' => $values['phone'],
                'code' => make_token(10)
            ]);
    }

    public function storeOrderItem($order_id,$values)
    {
        return OrderItem::query()
            ->create([
                'order_id' => $order_id,
                'product_id' => $values['product_id'],
                'price' => $values['price'],
                'count' => $values['count']
            ]);
    }
}
