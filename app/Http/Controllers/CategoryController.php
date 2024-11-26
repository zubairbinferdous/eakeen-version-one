<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category()
    {
        return view('admin.category.category');
    }

    public function categoryDataInsert(Request $request)
    {

        // dd($request->categoryImg);
        // Validate the input
        $request->validate([
            'category' => 'required|string|max:255',
            'categoryImg' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:8072',
        ]);

        // Handle image upload
        $imagePath = null;

        if ($request->hasFile('categoryImg')) {
            $uploadPath = public_path('upload/category');
            $file = $request->file('categoryImg');
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move($uploadPath, $imageName);
            $imagePath = 'upload/category/' . $imageName;
        }

        // Save to the database
        Category::create([
            'category_name' => strtoupper($request->input('category')),
            'category_image' => $imagePath,
        ]);

        return redirect()->route('categoryData')->with('success', 'Category created successfully!');
    }

    public function categoryData()
    {
        $allCategory = Category::get();
        return view('admin.category.categoryData', compact('allCategory'));
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.editCategory', compact('category'));
    }

    public function update(Request $request, $id)
    {
        // Validate the form data
        $request->validate([
            'category' => 'required|string|max:255',
            'categoryImg' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:8072',
        ]);

        $category = Category::findOrFail($id); // Fetch the existing category

        // If a new image is uploaded
        $imagePath = $category->category_image; // Keep the old image as default

        if ($request->hasFile('categoryImg')) {
            // Delete old image if it exists
            if (file_exists(public_path($category->category_image))) {
                unlink(public_path($category->category_image)); // Delete old file
            }

            // Handle image upload
            $file = $request->file('categoryImg');
            $imageName = time() . '_' . $file->getClientOriginalName();
            $uploadPath = public_path('upload/category');
            $file->move($uploadPath, $imageName);

            // Store the new image path
            $imagePath = 'upload/category/' . $imageName;
        }

        // Update the category in the database
        $category->category_name = strtoupper($request->input('category')); // Uppercase category name
        $category->category_image = $imagePath; // Update the image path
        $category->save(); // Save changes

        // Redirect back with success message
        return redirect()->route('categoryData')->with('success', 'Category updated successfully!');
    }


    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        if (file_exists(public_path($category->category_image))) {
            unlink(public_path($category->category_image));
        }
        $category->delete();

        return redirect()->route('categoryData')->with('warning', 'Category deleted successfully');
    }
}
