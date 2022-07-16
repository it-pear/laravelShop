<?php

namespace App\Imports;

use App\Models\Product;
use App\Models\ImagesCollection;
use Illuminate\Support\Collection;
use App\Models\Category;
use App\Models\PropertyOption;
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
            $brend = PropertyOption::where('name', $row[2])->first();

            $time = date('YmdHis');
            $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
            $random = substr(str_shuffle($permitted_chars), 0, 10) . $time;

            function imageItteration($row, $random) {
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
            }
            function brandsItteration($brend, $row) {
                if (is_null($brend)) {
                    return new PropertyOption([
                        'property_id'     => 1,
                        'name'    => $row[2]
                    ]);
                } else {
                    // здесь нужно сделать добавление новой ячейки в балице продукт->свойство->опция
                    dd($brend);
                }
            }
            
            // dd('public/' . $row[2] . '/' . $row[5]);
            // dd($random . $random);
            dd($brend);
            if (is_null($categry)) {
                imageItteration($row, $random);
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
                brandsItteration($brend, $row);
            } else {
                imageItteration($row, $random);
                return new Product([
                    'name'     => $row[2],
                    'code'    => $random, 
                    'description'  => '', 
                    'price'    => $row[3],
                    'category_id'    => $categry->id,
                    'image'    => 'products/' . $row[2] . '/' . $row[5]
                ]);
                brandsItteration($brend, $row);
            }
        }
        
    }
}
