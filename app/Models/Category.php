<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;

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

    public function path()
    {
        return route('products.category', Hashids::encode($this->id) . '-' . $this->slug);
    }
}
