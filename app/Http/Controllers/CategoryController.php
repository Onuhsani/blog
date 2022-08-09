<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('admin.category', compact('categories'));
    }


    public function create()
    {
        return view('admin.create-category');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title'=>['required', 'string', 'max:255'],
            'meta_title'=>['required', 'string', 'max:255'],
        ]);

        $slug = str_replace(' ', '-', $request->meta_title);

        Category::create([
            'title' => $request->title,
            'meta_title' => $request->meta_title,
            'slug' => $slug,
        ]);

        return redirect()->back()->with('success', 'Category created');
    }


    public function edit(Category $category)
    {   
        return view('admin.edit-category', compact('category'));
    }


    public function update(Request $request, Category $category)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'meta_title' => ['required', 'string', 'max:255'],
        ]);
        $slug = str_replace(' ', '-', $request->meta_title);

        $category->title = $request->title;
        $category->meta_title = $request->meta_title;
        $category->slug = $slug;
        $category->save();

        return redirect()->back()->with('success', 'Category updated');
    }

    
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back()->with('success', 'Category deleted');
    }
}
