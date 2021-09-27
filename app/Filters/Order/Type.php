<?php


namespace App\Filters\Order;


use App\Filters\Filter;
use App\Models\Order;

class Type extends Filter
{
    protected function applyFilter($builder)
    {
        $keyword = request($this->filterName());

        if ($keyword == 'paid') {
            return $builder->where('type', '=', Order::PAID);
        } elseif ($keyword == 'unpaid') {
            return $builder->where('type', '=', Order::UNPAID);
        }
    }
}
