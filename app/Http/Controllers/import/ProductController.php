<?php

namespace App\Http\Controllers\import;

use Illuminate\Http\Request;
use App\Imports\ProductImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function import() 
    {
        try {
            Excel::import(new ProductImport, 'public/products.xlsx', 'local');
            return redirect('/')->with('success', 'All good!');
        } catch  (FileNotFoundException $e) {
            dd($e->getMessage());
        }
        
    }
}
