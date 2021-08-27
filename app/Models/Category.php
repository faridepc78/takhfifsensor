<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $guarded =
        [
            'id',
            'created_at',
            'updated_at'
        ];

    protected $fillable =
        [
            'name',
            'slug',
            'parent_id',
            'level'
        ];

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id', 'id')->withDefault();
    }

    public function sub()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }
}
