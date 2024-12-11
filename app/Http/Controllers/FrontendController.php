<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function homePage()
    {
        $category = Category::get();
        $Product = Product::get();
        return view('frontend.homePageArea', compact('category', 'Product'));
    }


    public function shop()
    {
        $brand = Brand::get();
        $category = Category::get();
        $Product = Product::get();
        return view('frontend.ShopPage', compact('category', 'Product', 'brand'));
    }


    public function productPage($id)
    {
        $data = Product::findOrFail($id);
        return view('frontend.ProductShop', compact('data'));
    }
    public function cartPage()
    {
        return view('frontend.cartPage');
    }

    public function checkout()
    {
        return view('frontend.checkout');
    }

    public function addToCart()
    {
        return 'hello';
    }
}
