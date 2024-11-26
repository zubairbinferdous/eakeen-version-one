<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\subCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function subCategory()
    {
        $category = Category::select('id', 'category_name')->get();
        return view('admin.subCategory.subCategory', compact('category'));
    }

    public function subCategoryAdd(Request $request)
    {
        // dd($request->subcategory_name);
        $request->validate([
            'category_id' => 'required|exists:categories,id', // Ensure category exists
            'subcategory_name' => 'required|string|max:255'
        ]);

        subCategory::create([
            'category_id' => $request->category_id,
            'subcategory_name' => strtoupper($request->subcategory_name),
        ]);

        return redirect()->route('subCategoryAll')->with('success', 'sub category created successfully!');
    }

    public function subCategoryAll()
    {
        $allSubcategory = subCategory::get();
        return view('admin.subCategory.allSubCategory', compact('allSubcategory'));
    }

    public function subCateDestroy($id)
    {
        $data = subCategory::findOrFail($id);
        $data->delete();

        return redirect()->route('subCategoryAll')->with('warning', 'subCategory deleted successfully');
    }
}
