<?php


namespace App\Filters\Contact;


use App\Filters\Filter;
use App\Models\ContactUs;

class Type extends Filter
{
    protected function applyFilter($builder)
    {
        $search = request($this->filterName());

        if ($search == 'read') {
            return $builder->where('type', '=', ContactUs::READ);
        } elseif ($search == 'unread') {
            return $builder->where('type', '=', ContactUs::UNREAD);
        }
    }
}
