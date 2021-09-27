<?php


namespace App\Filters\Transaction;


use App\Filters\Filter;
use App\Models\Transaction;

class Status extends Filter
{
    protected function applyFilter($builder)
    {
        $keyword = request($this->filterName());

        if ($keyword == 'active') {
            return $builder->where('status', '=', Transaction::ACTIVE);
        } elseif ($keyword == 'pending') {
            return $builder->where('status', '=', Transaction::PENDING);
        } elseif ($keyword == 'inactive') {
            return $builder->where('status', '=', Transaction::INACTIVE);
        }
    }
}
