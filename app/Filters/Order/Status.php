<?php


namespace App\Filters\Order;


use App\Filters\Filter;
use App\Models\Order;

class Status extends Filter
{
    protected function applyFilter($builder)
    {
        $keyword = request($this->filterName());

        if ($keyword == 'accept') {
            return $builder->where('status', '=', Order::ACCEPT);
        }
        elseif ($keyword == 'pending') {
            return $builder->where('status', '=', Order::PENDING);
        }
    }
}
