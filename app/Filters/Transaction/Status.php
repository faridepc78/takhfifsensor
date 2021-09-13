<?php


namespace App\Filters\Transaction;


use App\Filters\Filter;
use App\Models\Transaction;

class Status extends Filter
{
    protected function applyFilter($builder)
    {
        $search = request($this->filterName());

        if ($search == 'active') {
            return $builder->where('status', '=', Transaction::ACTIVE);
        } elseif ($search == 'pending') {
            return $builder->where('status', '=', Transaction::PENDING);
        } elseif ($search == 'inactive') {
            return $builder->where('status', '=', Transaction::INACTIVE);
        }
    }
}
