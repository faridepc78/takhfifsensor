<?php

namespace App\Repositories;

use App\Filters\Product\Search;
use App\Filters\Product\Status;
use App\Models\Post;
use App\Models\Product;
use App\Models\ProductGallery;
use App\Models\ProductMedia;
use Illuminate\Pipeline\Pipeline;

class ProductRepository
{
    public function store($values)
    {
        return Product::query()
            ->create([
                'name' => $values['name'],
                'slug' => $values['slug'],
                'category_id' => $values['category_id'],
                'brand_id' => $values['brand_id'],
                'image_id' => null,
                'price' => $values['price'],
                'discount' => $values['discount'],
                'feature' => $values['feature'],
                'text' => $values['text'],
                'count' => $values['count'],
                'status' => $values['status']
            ]);
    }

    public function addImage($image_id, $id)
    {
        return Product::query()
            ->where('id', '=', $id)
            ->update([
                'image_id' => $image_id
            ]);
    }

    public function paginateByFilters()
    {
        return app(Pipeline::class)
            ->send(Product::query())
            ->through([
                Status::class,
                Search::class
            ])
            ->thenReturn()
            ->latest()
            ->paginate(10);
    }

    public function findById($id)
    {
        return Product::query()
            ->findOrFail($id);
    }

    public function update($values, $image_id, $id)
    {
        return Product::query()
            ->where('id', '=', $id)
            ->update([
                'name' => $values['name'],
                'slug' => $values['slug'],
                'category_id' => $values['category_id'],
                'brand_id' => $values['brand_id'],
                'image_id' => $image_id,
                'price' => $values['price'],
                'discount' => $values['discount'],
                'feature' => $values['feature'],
                'text' => $values['text'],
                'count' => $values['count'],
                'status' => $values['status']
            ]);
    }

    public function new($count)
    {
        return Product::query()
            ->where('status', '=', Post::ACTIVE)
            ->latest()
            ->limit($count)
            ->get();
    }

    public function findByCategoryId($category_id)
    {
        $data =
            [
                ['status', '=', Product::ACTIVE],
                ['category_id', '=', $category_id]
            ];
        return Product::query()
            ->where($data)
            ->latest()
            ->paginate(21);
    }

    public function findByBrandId($brand_id)
    {
        $data =
            [
                ['status', '=', Product::ACTIVE],
                ['brand_id', '=', $brand_id]
            ];
        return Product::query()
            ->where($data)
            ->latest()
            ->paginate(21);
    }

    public function search($keyword)
    {
        return Product::query()
            ->where('name', 'like', '%' . $keyword . '%')
            ->where('status', '=', Post::ACTIVE)
            ->orWhereHas('category', function ($query) use ($keyword) {
                $query->where('name', 'like', '%' . $keyword . '%');
            })
            ->orWhereHas('brand', function ($query) use ($keyword) {
                $query->where('name', 'like', '%' . $keyword . '%');
            })
            ->paginate(21);
    }

    /*START MEDIA*/

    public function findMediaByProductId($product_id)
    {
        return ProductMedia::query()
            ->where('product_id', '=', $product_id)
            ->latest()
            ->paginate(10);
    }

    public function storeMedia($values)
    {
        return ProductMedia::query()
            ->create([
                'product_id' => $values['product_id'],
                'media_id' => null
            ]);
    }

    public function addMedia($media_id, $id)
    {
        return ProductMedia::query()
            ->where('id', '=', $id)
            ->update([
                'media_id' => $media_id
            ]);
    }

    public function findMediaById($id)
    {
        return ProductMedia::query()
            ->findOrFail($id);
    }

    /*END MEDIA*/

    /*START GALLERY*/

    public function findGalleryByProductId($product_id)
    {
        return ProductGallery::query()
            ->where('product_id', '=', $product_id)
            ->latest()
            ->paginate(10);
    }

    public function storeGallery($values)
    {
        return ProductGallery::query()
            ->create([
                'product_id' => $values['product_id'],
                'image_id' => null
            ]);
    }

    public function addImageGallery($image_id, $id)
    {
        return ProductGallery::query()
            ->where('id', '=', $id)
            ->update([
                'image_id' => $image_id
            ]);
    }

    public function findGalleryById($id)
    {
        return ProductGallery::query()
            ->findOrFail($id);
    }

    /*END GALLERY*/
}
