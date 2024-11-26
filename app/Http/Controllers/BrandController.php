<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function brand()
    {
        return view('admin.Brand.Brand');
    }

    public function brandDataInsert(Request $request)
    {

        // dd($request->categoryImg);
        // Validate the input
        $request->validate([
            'brand' => 'required|string|max:255',
        ]);

        // Save to the database
        Brand::create([
            'brand_name' => strtoupper($request->input('brand')),
        ]);

        return redirect()->route('BrandData')->with('success', 'brand created successfully!');
    }


    public function brandData()
    {
        $brandData = Brand::get();
        return view('admin.Brand.brandData', compact('brandData'));
    }


    public function brandDestroy(Request $request, $id)
    {
        $brandItem = Brand::findOrFail($id);
        $brandItem->delete();
        return redirect()->route('BrandData')->with('warning', 'Brand deleted successfully');
    }

    public function brandUpdate(Request $request, $id)
    {
        $brandItem = Brand::findOrFail($id);
        $brandItem->brand_name = strtoupper($request->input('brand'));
        $brandItem->save();
        return redirect()->route('BrandData')->with('success', 'Brand Update successfully');
    }

    public function brandEdit($id)
    {
        $BrandItem = Brand::findOrFail($id);
        return view('admin.brand.editBrand', compact('BrandItem'));
    }
}
