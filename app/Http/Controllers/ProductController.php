<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct()
    {
        return view('admin.product.product');
    }
    public function productData()
    {
        return view('admin.product.productData');
    }
}
