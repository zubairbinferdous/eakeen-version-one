<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\subCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct()
    {
        $category = Category::select('id', 'category_name')->get();
        $brand = Brand::select('id', 'brand_name')->get();
        $subCategory = subCategory::select('id', 'subcategory_name')->get();
        return view('admin.product.product', compact('category', 'brand', 'subCategory'));
    }
    public function productData()
    {
        $data = Product::select('id', 'product_title', 'product_id', 'status', 'visibility', 'coin', 'ProductImages', 'discount_price', 'actual_price')->orderBy('id', 'desc')->get();
        return view('admin.product.productData', compact('data'));
    }

    public function ProductStoreData(Request $request)
    {

        $request->validate([
            'ProductTitle' => 'required|string|max:255',
            'ProductId' => 'required|string|unique:products,product_id',
            'Description' => 'required|string',
            'ProductSeo' => 'nullable|string|max:255',
            'SeoDescription' => 'nullable|string|max:500',
            'Status' => 'required|string',
            'Visibility' => 'required|string',
            'Category' => 'required|exists:categories,id',
            'SubCategory' => 'nullable|exists:sub_categories,id',
            'Brand' => 'nullable|string|max:255',
            'ActualPrice' => 'required|numeric',
            'DiscountPrice' => 'nullable|numeric',
            'DealerPrice' => 'nullable|numeric',
            'Stock' => 'required|integer',
            'coin' => 'nullable|integer',
            'Availabilty' => 'required|boolean',
            'ProductImages' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:3072',
            'tag' => 'nullable|array',
            'HotDeals' => 'nullable|boolean',
            'Featured' => 'nullable|boolean',
            'TodayDeal' => 'nullable|boolean',
        ]);


        // Handle file upload if present

        if ($request->hasFile('ProductImages')) {
            $uploadPath = public_path('upload/Product');
            $file = $request->file('ProductImages');
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move($uploadPath, $imageName);
            $imagePath = 'upload/Product/' . $imageName;
        }

        // Create the product record
        Product::create([
            'product_title' => $request->ProductTitle,
            'product_id' => $request->ProductId,
            'description' => $request->Description,
            'product_seo' => $request->ProductSeo ?? null,
            'seo_description' => $request->SeoDescription ?? null,
            'status' => $request->Status,
            'visibility' => $request->Visibility,
            'category_id' => $request->Category,
            'subcategory_id' => $request->SubCategory ?? null,
            'brand' => $request->Brand ?? null,
            'actual_price' => $request->ActualPrice,
            'discount_price' => $request->DiscountPrice ?? null,
            'dealer_price' => $request->DealerPrice ?? null,
            'stock' => $request->Stock,
            'coin' => $request->coin ?? null,
            'availability' => $request->Availabilty,
            'ProductImages' => $imagePath,
            'tags' => $request->tag ? json_encode($request->tag) : null,
            'hot_deals' => $request->boolean('HotDeals'),
            'featured' => $request->boolean('Featured'),
            'today_deal' => $request->boolean('TodayDeal'),
        ]);

        return redirect()->back()->with('success', 'Product added successfully!');
    }

    public function productDataDelete(Request $request, $id)
    {
        $data = Product::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('warning', 'Product Delete successfully!');
    }
}
