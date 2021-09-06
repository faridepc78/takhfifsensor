<?php


namespace App\Filters\Order;


use App\Filters\Filter;
use App\Models\Order;

class Status extends Filter
{
    protected function applyFilter($builder)
    {
        $search = request($this->filterName());

        if ($search == 'accept') {
            return $builder->where('status', '=', Order::ACCEPT);
        }
        elseif ($search == 'pending') {
            return $builder->where('status', '=', Order::PENDING);
        }
        elseif ($search == 'updated') {
            return $builder->where('status', '=', Order::UPDATED);
        }
    }
}
