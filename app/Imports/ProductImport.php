<?php

namespace App\Imports;

use App\Models\Product;
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
            $date = ($dirName = date( 'YmdHis', time() ) + rand(5, 45));
            // dd($date);
            if (is_null($categry)) {
                return new Category([
                    'name'     => $row[0],
                    'code'    => $row[1]
                ]);
                return new Product([
                    'name'     => $row[0],
                    'code'    => $date, 
                    'description'  => '', 
                    'price'    => $row[3],
                    'category_id'    => $row[4]
                ]);
            } else {
                return new Product([
                    'name'     => $row[2],
                    'code'    => $date, 
                    'description'  => '', 
                    'price'    => $row[3],
                    'category_id'    => $categry->id
                ]);
            }
        }
        
    }
}
