<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductsImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Product([
            'name' => $row[0],
            'slug' => $row[1],
            'category_id' => $row[2],
            'brand_id' => $row[3],
            'image_id' => $row[4],
            'price' => $row[5],
            'discount' => $row[6],
            'feature' => $row[7],
            'text' => $row[8],
            'count' => $row[9],
            'status' => $row[10],
        ]);
    }
}
