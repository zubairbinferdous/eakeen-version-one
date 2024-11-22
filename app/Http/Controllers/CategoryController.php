<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category()
    {
        return view('admin.category.category');
    }
    public function categoryData()
    {
        return view('admin.category.categoryData');
    }
}
