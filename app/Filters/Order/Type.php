<?php


namespace App\Filters\Order;


use App\Filters\Filter;
use App\Models\Order;

class Type extends Filter
{
    protected function applyFilter($builder)
    {
        $search = request($this->filterName());

        if ($search == 'paid') {
            return $builder->where('type', '=', Order::PAID);
        } elseif ($search == 'unpaid') {
            return $builder->where('type', '=', Order::UNPAID);
        }
    }
}
