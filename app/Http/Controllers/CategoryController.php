<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // All Cartegory Method
    public function allCategory()
    {
        $all_category = Category::latest()->get();
        return view('category.all_category', compact('all_category'));
    } // End Method

    // Create Cartegory Method
    public function createCategory()
    {

        return view('category.create_category');
    } // End Method

    // Store Category Method
    public function storeCategory(Request $request)
    {
        Category::insert([
            'name' => $request->name,
            'created_at' => Carbon::now()->setTimezone('Asia/Yangon'),
        ]);

        return redirect()->route('all.category');
    } // End Method

    // Edit Category Method
    public function editCategory($id)
    {
        $category = Category::findOrFail($id);
        return view('category.edit_category', compact('category'));
    } // End Method

    // Update Category Method
    public function updateCategory(Request $request,$id)
    {

        Category::findOrFail($id)->update([
            'name' => $request->name,
            'created_at' => Carbon::now()->setTimezone('Asia/Yangon'),
        ]);
        return redirect()->route('all.category');
    } // End Method

    // Delete Category Method
    public function deleteCategory($id)
    {
        Category::findOrFail($id)->delete();
        return redirect()->route('all.category');
    } // End Method
}
