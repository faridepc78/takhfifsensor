<?php

namespace App\Repositories;

use App\Filters\Order\Search;
use App\Filters\Order\Status;
use App\Filters\Order\Type;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Pipeline\Pipeline;

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

    public function storeOrderItem($order_id, $values)
    {
        return OrderItem::query()
            ->create([
                'order_id' => $order_id,
                'product_id' => $values['product_id'],
                'price' => $values['price'],
                'count' => $values['count']
            ]);
    }

    public function paginatePendingBySearch()
    {
        return Order::query()
            ->where('status', '=', Order::PENDING)
            ->latest()
            ->paginate(10);
    }

    public function paginateByFilters()
    {
        return app(Pipeline::class)
            ->send(Order::query())
            ->through([
                Status::class,
                Type::class,
                Search::class
            ])
            ->thenReturn()
            ->orderBy('status', 'desc')
            ->orderBy('id', 'desc')
            ->pluck('id')
            ->toArray();
    }
}
