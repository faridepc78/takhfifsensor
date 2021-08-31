<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Lang;
use Vinkla\Hashids\Facades\Hashids;

class Product extends Model
{
    protected $table = 'products';

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
            'category_id',
            'brand_id',
            'image_id',
            'price',
            'discount',
            'feature',
            'text',
            'count',
            'status',
            'sale'
        ];

    const ACTIVE = 'active';
    const INACTIVE = 'inactive';
    static $statuses =
        [
            self::ACTIVE,
            self::INACTIVE
        ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id')->withDefault();
    }

    public function image()
    {
        return $this->belongsTo(Media::class, 'image_id', 'id')->withDefault();
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id')->withDefault();
    }

    public function gallery()
    {
        return $this->hasMany(ProductGallery::class, 'product_id', 'id');
    }

    public function media()
    {
        return $this->hasMany(ProductMedia::class, 'product_id', 'id');
    }

    public function path()
    {
        return route('products.single', Hashids::encode($this->id) . '-' . $this->slug);
    }

    public function status()
    {
        if ($this->status == Post::ACTIVE) {
            return '<td class="alert alert-success">' . Lang::get(self::ACTIVE) . '</td>';
        } elseif ($this->status == Post::INACTIVE) {
            return '<td class="alert alert-danger">' . Lang::get(self::INACTIVE) . '</td>';
        }
    }

    public function finalPrice()
    {
        if ($this->discount!=null) {
            return ($this->price-($this->price*$this->discount));
        }else{
            return  $this->price;
        }
    }
}