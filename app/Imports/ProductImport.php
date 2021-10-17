<?php

namespace App\Imports;

use App\Models\Product;
use App\Models\ImagesCollection;
use Illuminate\Support\Collection;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        
        if (isset($row[0]) && $row[0]) {
            $categry = Category::where('code', $row[1])->first();
            $time = date('YmdHis');
            $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
            $random = substr(str_shuffle($permitted_chars), 0, 10) . $time;
            
            // dd('public/' . $row[2] . '/' . $row[5]);
            // dd($random . $random);
            if (is_null($categry)) {
                ImagesCollection::create([
                    'filename' => 'products/' . $row[2] . '/' . $row[6],
                    'product_code' => $random
                ]);
                ImagesCollection::create([
                    'filename' => 'products/' . $row[2] . '/' . $row[7],
                    'product_code' => $random
                ]);
                ImagesCollection::create([
                    'filename' => 'products/' . $row[2] . '/' . $row[8],
                    'product_code' => $random
                ]);
                ImagesCollection::create([
                    'filename' => 'products/' . $row[2] . '/' . $row[9],
                    'product_code' => $random
                ]);
                return new Category([
                    'name'     => $row[0],
                    'code'    => $row[1]
                ]);
                return new Product([
                    'name'     => $row[0],
                    'code'    => $random, 
                    'description'  => '', 
                    'price'    => $row[3],
                    'category_id'    => $row[4],
                    'image'    => 'products/' . $row[2] . '/' . $row[5]
                ]);
            } else {
                ImagesCollection::create([
                    'filename' => 'products/' . $row[2] . '/' . $row[6],
                    'product_code' => $random
                ]);
                ImagesCollection::create([
                    'filename' => 'products/' . $row[2] . '/' . $row[7],
                    'product_code' => $random
                ]);
                ImagesCollection::create([
                    'filename' => 'products/' . $row[2] . '/' . $row[8],
                    'product_code' => $random
                ]);
                ImagesCollection::create([
                    'filename' => 'products/' . $row[2] . '/' . $row[9],
                    'product_code' => $random
                ]);
                return new Product([
                    'name'     => $row[2],
                    'code'    => $random, 
                    'description'  => '', 
                    'price'    => $row[3],
                    'category_id'    => $categry->id,
                    'image'    => 'products/' . $row[2] . '/' . $row[5]
                ]);
            }
        }
        
    }
}
