<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class showCategory extends Model
{
    protected $table = 'show_categories';

    protected $guarded =
        [
            'id',
            'created_at',
            'updated_at'
        ];

    protected $fillable =
        [
            'category_id'
        ];
}
