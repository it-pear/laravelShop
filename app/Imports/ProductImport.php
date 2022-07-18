<?php

namespace App\Imports;

use App\Models\Product;
use App\Models\ImagesCollection;
use Illuminate\Support\Collection;
use App\Models\Category;
use App\Models\PropertyOption;
use App\Models\PropuctPropertyOption;
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

            if (is_null($categry)) {
                ImagesCollection::create([
                    'filename' => 'products/' . $row[3] . '/' . $row[6],
                    'product_code' => $random
                ]);
                ImagesCollection::create([
                    'filename' => 'products/' . $row[3] . '/' . $row[7],
                    'product_code' => $random
                ]);
                ImagesCollection::create([
                    'filename' => 'products/' . $row[3] . '/' . $row[8],
                    'product_code' => $random
                ]);
                ImagesCollection::create([
                    'filename' => 'products/' . $row[3] . '/' . $row[9],
                    'product_code' => $random
                ]);
                $result1 = Category::create([
                    'name'    => $row[0],
                    'code'    => $row[1]
                ]);
                $result2 = Product::create([
                    'name'    => $row[3],
                    'code'    => $random, 
                    'description'  => '', 
                    'price'    => $row[4],
                    'category_id'    => $result1->id,
                    'image'    => 'products/' . $row[3] . '/' . $row[6]
                ]);
                if (is_null($brend)) {
                    $property = PropertyOption::create([
                        'property_id'     => 1,
                        'name'    => $row[2]
                    ]);
                    PropuctPropertyOption::create([
                        'property_option_id'     => $property->id,
                        'product_id'    => $result2->id
                    ]);
                } else {
                    PropuctPropertyOption::create([
                        'property_option_id'     => $brend->id,
                        'product_id'    => $result2->id
                    ]);
                }
            } else {
                ImagesCollection::create([
                    'filename' => 'products/' . $row[3] . '/' . $row[6],
                    'product_code' => $random
                ]);
                ImagesCollection::create([
                    'filename' => 'products/' . $row[3] . '/' . $row[7],
                    'product_code' => $random
                ]);
                ImagesCollection::create([
                    'filename' => 'products/' . $row[3] . '/' . $row[8],
                    'product_code' => $random
                ]);
                ImagesCollection::create([
                    'filename' => 'products/' . $row[3] . '/' . $row[9],
                    'product_code' => $random
                ]);
                $result2 = Product::create([
                    'name'     => $row[3],
                    'code'    => $random, 
                    'description'  => '', 
                    'price'    => $row[4],
                    'category_id'    => $categry->id,
                    'image'    => 'products/' . $row[3] . '/' . $row[6]
                ]);
                if (is_null($brend)) {
                    $property = PropertyOption::create([
                        'property_id'     => 1,
                        'name'    => $row[2]
                    ]);
                    PropuctPropertyOption::create([
                        'property_option_id'     => $property->id,
                        'product_id'    => $result2->id
                    ]);
                } else {
                    PropuctPropertyOption::create([
                        'property_option_id'     => $brend->id,
                        'product_id'    => $result2->id
                    ]);
                }
            }
        }
        

        
    }
}
