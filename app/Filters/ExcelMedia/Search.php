<?php


namespace App\Filters\ExcelMedia;


use App\Filters\Filter;

class Search extends Filter
{
    protected function applyFilter($builder)
    {
        $keyword = request($this->filterName());
        return $builder->where('name', 'like', '%' . $keyword . '%');
    }
}
