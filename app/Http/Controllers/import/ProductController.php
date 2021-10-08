<?php

namespace App\Http\Controllers\import;

use Illuminate\Http\Request;
use App\Http\Requests\ImportRequest;
use App\Imports\ProductImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function import(ImportRequest $request) 
    {
        try {
            Excel::import(new ProductImport, request()->file('excel'));
            return back()->with('success', 'Товары успешно загружены');
        } catch  (FileNotFoundException  $e) {
            return back()->with('warning', 'Произошла ошибка - товары не загружены!');
        } 
        
    }
}
