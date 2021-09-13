<?php


namespace App\Filters\Transaction;


use App\Filters\Filter;
use Morilog\Jalali\Jalalian;

class Date extends Filter
{
    protected function applyFilter($builder)
    {
        if (request($this->filterName()) != null) {
            $date = Jalalian::fromFormat('Y-m-d', convert(request($this->filterName())))->toCarbon()->toDateString();
            return $builder->whereDate('created_at', $date);
        } else {
            return $builder;
        }
    }
}
